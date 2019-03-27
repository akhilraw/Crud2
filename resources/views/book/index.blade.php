@extends('layouts.app')

@section('content')

<div class="container" xmlns:color="http://www.w3.org/1999/xhtml" xmlns:color="http://www.w3.org/1999/xhtml"
         xmlns:color="http://www.w3.org/1999/xhtml" xmlns:color="http://www.w3.org/1999/xhtml">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <h2>All Books</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br/>
        @endif

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{--{{ session('status') }}--}}
                    {{session('message')}}
                </div>
            @endif
        </div>
        {{csrf_field()}}

        <table class="table table-striped">

            <thead>
            <tr>
                <td><b>ID</b></td>
                <td><b>Title</b></td>
                <td><b>Image</b></td>
                <td><b>Author</b></td>
                <td><b>Description</b></td>
                <td><b>Available Quantity</b></td>
                <td><b>Price</b></td>
                <td><b>View</b></td>
                <td><b>Edit</b></td>
                <td><b>Delete</b></td>
            </tr>
            </thead>
            <tbody>
              @foreach($books as $book)
              <tr>
                <td>{{$book['id']}}</td>
                <td>{{$book['title']}}</td>
                <td><img style="width:50px;" class="img-responsive" src="{{URL::to('/upload')}}/{{ $book['image']}}" alt="image-not-available"/></td>
                <td>{{$book['author']}}</td>
                <td>{{$book['description']}}</td>
                <td>{{$book['quantity']}}</td>
                <td>{{$book['price']}}</td>
                <td><a href="<?php echo url("/show/book/{$book['id']}")?>" class="btn btn-outline-primary"><i class='fas fa-eye'></i></a></td>
                <td><a href="<?php echo url("/edit/book/{$book['id']}")?>" class="btn btn-outline-primary"><i class='fas fa-edit'></i></a></td>
                <td><a class="btn btn-danger" role="button" data-toggle="modal" data-target="#modal-delete-{{ $book['id']}}"><i class="fa fa-trash"></i></a>
                @endforeach
            </tbody>


        </table>

        <a href="<?php echo url('/add')?>">
            <button class="float-left submit-button" >Add New Book</button>
        </a>
        </div>


@endsection
