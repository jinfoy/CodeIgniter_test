<?php

namespace App\Controllers;

use App\Models\Sample00_model;

class Hello extends BaseController
{

  function __construct()
  {
    $this->output->enable_profiler(TRUE);
  }

  function index()
  {
    echo 'プロファイラのテスト中';
    // $this->model = new Sample00_model();
    // $fruits = $this->model->get_price();
    // foreach ($fruits as $key => $value)
    // {
    //   echo $key . $value . '<br />';
    // }
  }

}

?>
