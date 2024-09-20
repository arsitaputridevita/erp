<?php

namespace App\Controllers;

use App\Models\Token;

class Home extends BaseController
{
  public function index()
  {
    $urlCarousel = "http://erpapi.local/public/slide-unibi";
    $urlAchievement = "http://erpapi.local/public/prestasi-unibi";
    $urlNews = "http://erpapi.local/public/berita-unibi";
    $urlSchedule = "http://erpapi.local/public/agenda-unibi";

    $dataCarousel = $this->getData($urlCarousel, "GET", true);
    $dataAchievement = $this->getData($urlAchievement, "GET", true);
    $dataNews = $this->getData($urlNews, "GET", true);
    $dataSchedule = $this->getData($urlSchedule, "GET", true);

    $model = new Token();
    $data = $model->findAll();

    return view('home/index', [
      'JWToken' => $data[0]['token'],
      'carousel' => $dataCarousel,
      'achievement' => $dataAchievement,
      'news' => $dataNews,
      'schedule' => $dataSchedule,
    ]);
  }

  public function getData($url, $method, $status)
  {
    helper(['rest']);
    $response = restAccess($method, $url, []);
    $data = json_decode($response, $status);

    return $data;
  }
}
