<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
@extends('layout')

@section('content')
<div class="container col-6 mt-5 border">
        <div class=" m-0  ">
          <h2 class="m-0 text-info"> Student Registration </h2>
        </div>
        <div class="m-2">
        <form method="post" action="/saveStudent">
             @csrf
        <div class="form-group">
            <label for="exampleInputSubject"><b>Name</b></label>
            <input type="text" class="form-control" id="exampleInputSubject" name="name" placeholder="Enter Name">
        </div>
        <p style="color:red">@error('name'){{$message}}@enderror</p>
        <div class="form-group">
            <label for="exampleInputSubject"><b>Email</b></label>
            <input type="text" class="form-control" id="exampleInputSubject" name="email" placeholder="Enter Email">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
    </div>
@endsection
    
</body>
</html>