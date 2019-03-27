@extends('layouts.app')

@section('content')

<div class="container">

  <div class="col-md-12" >
     <form method="post" action="{{url('/store')}}" enctype="multipart/form-data">
       @csrf
         <div class="form-group">
             <label for="title">Book Title:</label>
             <input type="text" class="form-control" name="title" required>
         </div>
         <div class="form-group">
             <label for="author">Book Author:</label>
             <input type="text" class="form-control" name="author" required>
         </div>
         <div class="form-group">
         <label for="description">Book Description:</label>
         <textarea cols="5" rows="5" class="form-control" name="description" required></textarea>
         </div>
         <div class="form-group">
             <label for="quantity">Enter Quantity:</label>
             <input type="number" class="form-control" name="quantity" required>
         </div>
         <div class="form-group">
             <label for="price">Book Price:</label>
             <input type="number" step="any" class="form-control" name="price" required>
         </div>
         <div class="form-group">
         <label for="image">upload Image:</label>
         <input type="file" class="form-control" name="image" required>
         </div>
         <button type="submit" class="form-control">Save</button>
     </form>
   </div>
  </div>

@endsection
