<?php

namespace App\Controllers\Sdm\JenisTes;

use App\Controllers\BaseController;
use App\Models\Token;

class JenisTes extends BaseController
{
    public function index()
    {
        $model = new Token(); // Initialize the JenisTesModel
        $data = $model->findAll(); // Fetch all records from 'jenis_tes' table

        return view('sdm/jenisTes/index', [
            'JWToken' => $data[0]['token'], // Pass the data to the view
        ]);
    }

    public function create()
    {
        return view('sdm/jenisTes/create'); // View for creating new "Jenis Tes"
    }

    public function show($id)
    {
        return view('sdm/jenisTes/show');
    }
}
