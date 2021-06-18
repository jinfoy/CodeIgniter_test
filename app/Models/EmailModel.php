<?php

  namespace App\Models;

  use CodeIgniter\Model;

  class EmailModel extends Model {

    function __construct()
    {
      $this->email = \Config\Services::email();

      $config['protocol'] = 'smtp';
      $config['SMTPHost'] = 'smtp.gmail.com';
      $config['SMTPPort'] = 465;
      $config['SMTPUser'] = 'jinfoy0402@gmail.com';
      $config['SMTPPass'] = 'lnqgywjmoaavqcra';
      $config['SMTPCrypto'] = 'ssl';
      $config['CRLF'] = "\r\n";
      $config['newline'] = "\r\n";
      $this->email->initialize($config);
    }

    function sendmail($mail)
    {
      $this->email->setFrom($mail['from'], $mail['from_name']);
      $this->email->setTo($mail['to']);
      $this->email->setSubject($mail['subject']);
      $this->email->setMessage($mail['body']);

      if ($this->email->send())
      {
        return TRUE;
      }
      else
      {
        return FALSE;
      }
    }
  }
