<?php

namespace App\Models;

use CodeIgniter\Model;

class Sample00_model extends Model {

  function get_price()
  {
    $fruits = array(
      'りんご' => '200円',
      'みかん' => '100円',
      'ぶどう' => '300円'
    );
    return $fruits;
  }
}