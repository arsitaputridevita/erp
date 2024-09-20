<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Token;

class Dashboard extends BaseController
{
  public function index()
  {
    $model = new Token();
    $data = $model->findAll();

    return view('dashboard/index', [
      'JWToken' => $data[0]['token']
    ]);
  }
}
