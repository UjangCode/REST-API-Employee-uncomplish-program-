<?php

namespace App\Controllers;

use App\Models\employeeModel;

class Home extends BaseController
{
    function __construct()
    {
        $this->employeeModel = new employeeModel();
    }
    public function index()
    {
        $data = [
            'isi'=> $this->employeeModel->findAll(),
        ];
        return view('home', $data);
    }
}
