<?php

namespace App\Controllers;

use App\Models\employeeModel;
use CodeIgniter\API\ResponseTrait;

class pegawai extends BaseController
{
  use ResponseTrait;
  function __construct()
  {
    $this->employeeModel = new employeeModel();
  }

  public function index()
  {
    # code...
    $data = $this->employeeModel->findAll();
    return $this->respond($data, 200);
  }
  function create()
  {
    $data = [
      'nama' => $this->request->getVar('nama'),
      'email' => $this->request->getVar('email'),
    ];
    $this->employeeModel->save($data);
    $response = [
      'status' => 201,
      'error' => null,
      'message' => "berhasil menambhakan data",
    ];

    return $this->respond($response);
  }
}
