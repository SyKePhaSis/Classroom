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
                        <h1>Welcome To Class Room<h1>
                    </div>
                </div>

                <div class="row-2 row">
                    <div class="col-12 d-flex justify-content-center align-content-center">
                        <h4> An easy, fast and user-friendly platform for students and teachers alike. <h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="connector">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <h1>Questions & Answers<h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-1 section">
            <div class="container">
                <div class="row-3 row">
                    <div class="side-1 col-6 d-flex justify-content-center align-items-center">
                        <h1>What is classroom?<h1>
                    </div>
                    <div class="side-2 col-6 d-flex justify-content-center align-items-center">
                        <h2 class="pl-5">Classroom is A platform dedicated to providing help to Students and Teachers by a multitude of features.<h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-2 section">
            <div class="container">
                <div class="row-3 row">
                    <div class="side-1 col-6 d-flex justify-content-center align-items-center">
                        <h1>What can teachers do?<h1>
                    </div>
                    <div class="side-2 col-6 d-flex justify-content-center align-items-center">
                        <h2 class="pl-5">Teachers can create groups for students. Then they can assign homework, individualy or do the whole group.<h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-3 section">
            <div class="container">
                <div class="row-3 row">
                    <div class="side-1 col-6 d-flex justify-content-center align-items-center">
                        <h1>What can students do?<h1>
                    </div>
                    <div class="side-2 col-6 d-flex justify-content-center align-items-center">
                        <h2 class="pl-5">Students can join their teacher's groups. Then they will be able to see the homework and the due date. Also they can create a schedule regarding when a lesson starts.<h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-4 section">
            <div class="container">
                <div class="row-3 row">
                    <div class="side-1 col-6 d-flex justify-content-center align-items-center">
                        <h1>Is it free?<h1>
                    </div>
                    <div class="side-2 col-6 d-flex justify-content-center align-items-center">
                        <h2 class="pl-5">Classroom is absolutely free. All you have to do is create an account and you are ready to go.<h2>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>

@endsection
