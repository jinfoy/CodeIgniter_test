<?php

namespace App\Controllers;

use App\Models\EmailModel;

class Form extends BaseController {

  protected $validation;

  function __construct()
  {
    $this->email = new EmailModel;
    $validation =  \Config\Services::validation();
    $this->validation = $validation;
  }

  function index()
  {
    helper(['form', 'url']);

    echo view('form_header');
    echo view('form', [
          'validation' => $this->validation,
        ]);
    echo view('ci_footer');
  }

  function confirm()
  {
    $data = $this->request->getPost();
    helper(['form', 'url']);

    if ($this->validation->run($data, 'email')) {
      echo view('form_header');
      echo view('form_confirm', $data);
      echo view('ci_footer');
    } else {
      echo view('form_header');
      echo view('form', [
        'errors' => $this->validation->getErrors()
      ]);
      echo view('ci_footer');
    }

  }

  function send()
  {
    $mail['from_name'] = $this->request->getPost('name');
    $mail['to']      = $this->request->getPost('email');
    $mail['from']        = 'jinfoy0402@gmail.com';
    $mail['subject']   = 'お問い合わせ';
    $mail['body']      = $this->request->getPost('comment');

    if ($this->email->sendmail($mail))
    {
      echo view('form_header');
      echo view('form_end');
      echo view('ci_footer');
    }
    else
    {
      echo 'メール送信エラー';
    }
  }

}

?>