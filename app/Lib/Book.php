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

  public static function store($request)
  {

    $img_name = 'no image';
    if ($file=$request->file('image'))
    {
        $img_name = $request['image']->getClientOriginalName();
        $img_names = $img_name;
        $path = 'upload/';
        $file->move($path,$img_names );
      }

    $storeD = $request->except(['image','_token']);
    $store = Model::updateOrCreate(['title'=>$storeD['title'], 'price'=>$storeD['price'], 'author'=>$storeD['author'], 'description'=>$storeD['description'], 'quantity'=>$storeD['quantity'],'image'=>$img_name]);
    return $store;
  }

  public static function show($id)
  {
    $show = Model::findOrFail($id)->toArray();
    return $show;
  }


}

 ?>
