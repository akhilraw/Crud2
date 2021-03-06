@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-12" >
     <form method="post" action="{{ route('update', $book) }}" enctype="multipart/form-data">
       <input name="_method" type="hidden" value="PATCH">
       @csrf
         <div class="form-group">
             <label for="title">Book Title:</label>
             <input type="text" class="form-control" name="title" value=" {{$book['title']}}"  >
         </div>
         <div class="form-group">
             <label for="author">Book Author:</label>
             <input type="text" class="form-control" name="author" value="{{$book['author']}}" >
         </div>
         <div class="form-group">
         <label for="description">Book Description:</label>
         <textarea cols="5" rows="5" class="form-control" name="description"> {{$book['description']}}</textarea>
         </div>
         <div class="form-group">
             <label for="quantity">Enter Quantity:</label>
             <input type="number" class="form-control" name="quantity" value="{{$book['quantity']}}" >
         </div>
         <div class="form-group">
             <label for="price">Book Price:</label>
             <input type="number" step="any" class="form-control" name="price" value="{{$book['price']}}" >
         </div>
         <div class="form-group">
         <label for="image">upload Image:</label>
         <input type="file" class="form-control" name="image" value="{{$book['image']}}" >
         </div>
         <button type="submit" class="form-control">Update</button>
     </form>
   </div>
  </div>

@endsection
