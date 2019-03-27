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
                <td><b>Edit</b></td>
                <td><b>Delete</b></td>
            </tr>
            </thead>
            <tbody>

            </tbody>


        </table>

        <a href="<?php echo url('/create')?>">
            <button class="float-left submit-button" >Add New Book</button>
        </a>
        </div>


@endsection
