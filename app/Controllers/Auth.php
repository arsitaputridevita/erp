<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Token;

class Auth extends BaseController
{
  public function login()
  {
    $request = service('request');
    $data = json_decode($request->getBody(), true);

    if (!$data) {
      $response = [
        'success' => 0,
        'message' => 'Validation failed',
      ];
      return $this->response->setJSON($response);
    }

    $model = new Token();
    $token = $model->findAll();

    session()->set([
      'isLoggedIn' => true,
      'nik' => $data['t_user_nik'],
      'nama' => $data['t_user_nama'],
      'email' => $data['t_user_email'],
      'username' => $data['t_user_username'],
      'id' => $data['t_user_id'],
      'jwtToken' => $token[0]['token'],
    ]);

    $response = [
      'success' => 1,
      'message' => 'Login Successful',
      'nik' => $data['t_user_nik'],
      'redirect' => base_url('/dashboard')
    ];

    return $this->response->setJSON($response);
  }

  public function logout()
  {
    session()->destroy();
    return redirect()->to('/');
  }
}
