<?php

namespace App\Controllers;

class Pages extends BaseController {

  public function view($page = 'home')
  {
    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
      // おっと、そのページはありません！
      show_404();
    }

    $data['title'] = ucfirst($page); // 頭文字を大文字に

    echo view('templates/header', $data);
    echo view('pages/'.$page, $data);
    echo view('templates/footer', $data);
    }
}