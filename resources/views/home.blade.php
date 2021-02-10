@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="css/home.css" rel="stylesheet">
        <title>Home</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Lora:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="top">
            <div class="container">
                <div class="row-1 row">
                    <div class="col-12 d-flex justify-content-center align-content-center align-items-end">
                        <h1>Welcome {{ auth()->user()->name }}<h1>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

@endsection
