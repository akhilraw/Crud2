<?php

namespace App\Lib;

use App\Models\Book as Model;

class Book
{

  public static function index()
  {
      $books = Model::all();
      return $books;
  }


}

 ?>
