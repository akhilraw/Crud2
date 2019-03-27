@extends('layouts.app')

@section('content')

<div class="container">
  <div align="center">

       @csrf
       <tr>
         <td><img style="max-width: 50%;"  class="img-responsive" src="{{URL::to('/upload')}}/{{ $show['image']}}" alt="un-available"/></td>
       </tr>
       <table class="table table-striped">
         <tr>
             <td>Book Title:</td>
             <td> {{$show['title']}}</td>
         </tr>
         <br>
         <tr>
             <td>Book Author:</td>
             <td> {{$show['author']}}</td>
         </tr>
         <br>
         <tr>
         <td>Book Description:</td>
         <td>{{$show['description']}}</td>
       </tr>
         <br>
         <tr>
             <td>Enter Quantity:</td>
             <td>{{$show['quantity']}}</td>
         </tr>
         <br>
         <tr>
             <td>Book Price:</td>
             <td>{{$show['price']}}</td>
         </tr>
         <br>
       </table>


   </div>
</div>

@endsection
