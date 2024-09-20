<?php

use App\Models\Token;

function restAccess($method, $url, $data)
{
  date_default_timezone_set('Asia/Jakarta');
  $client = \Config\Services::curlrequest();
  $model = new Token();
  $idToken = "1";
  $token = $model->getToken($idToken);

  if (!$token) {
    throw new \Exception('Token not found.');
  }

  $tokenPart = explode(".", $token);
  if (count($tokenPart) < 2) {
    throw new \Exception('Invalid token format.');
  }

  $payload = $tokenPart[1];
  $decode = base64_decode($payload, true);
  if ($decode === false) {
    throw new \Exception('Failed to decode token payload.');
  }

  $json = json_decode($decode, true);
  if (json_last_error() !== JSON_ERROR_NONE) {
    throw new \Exception('Failed to decode JSON: ' . json_last_error_msg());
  }

  $exp = $json['exp'] ?? 0;
  $waktuSekarang = time();
  if ($exp <= $waktuSekarang) {
    $authUrl = "http://erpapi.local/public/mjwt";

    $form_params = [
      'm_jwt_username' => 'lemsisfo',
      'm_jwt_password' => 'unibi041046'
    ];

    $response = $client->request('POST', $authUrl, [
      'http_errors' => false,
      'form_params' => $form_params
    ]);

    if ($response->getStatusCode() !== 200 && $response->getStatusCode() !== 201 && $response->getStatusCode() !== 202) {
      throw new \Exception('Failed to retrieve new token.');
    }

    $responseBody = $response->getBody();
    $responseJson = json_decode($responseBody, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
      throw new \Exception('Failed to decode JSON response: ' . json_last_error_msg());
    }

    $token = $responseJson['access_token'] ?? '';
    if (!$token) {
      throw new \Exception('No access token found in response.');
    }

    $dataToken = [
      'id' => $idToken,
      'token' => $token
    ];

    $model->save($dataToken);
  }

  $headers = [
    'Authorization' => 'Bearer ' . $token
  ];

  $options = [
    'headers' => $headers,
    'http_errors' => false
  ];

  if ($method === 'GET') {
    $options['query'] = $data;
  } else {
    $options['form_params'] = $data;
  }

  $response = $client->request($method, $url, $options);

  if ($response->getStatusCode() !== 200 && $response->getStatusCode() !== 201 && $response->getStatusCode() !== 202) {
    throw new \Exception('API request failed with status code: ' . $response->getStatusCode());
  }

  return $response->getBody();
}