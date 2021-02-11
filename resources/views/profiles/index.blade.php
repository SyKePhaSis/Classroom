@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset("css/profileShow.css") }}" rel="stylesheet">
        <title>Home</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Lora:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <div>
            <div class="top">
                <div class="container">
                    <div class="row pt-5">
                        <div class="col-12 d-flex justify-content-center align-content-center">
                            <h1 class="text-capitalize text-xl-center">{{ $user->name }}</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="description">
                <div class="container">
                    <div class="row pt-5">
                        <div class="offset-2 col-8 offset-2">
                            <div class="title pb-3 d-flex align-content-between align-items-baseline">
                                <h1 class="text-capitalize">Description</h1>
                                @if($user->id === auth()->user()->id)
                                    <div class="button pl-3">
                                        <form action="{{ route('profile.edit', ['user' => $user->id])}}" method='get'>
                                            <button type='submit' class="btn btn-primary">Edit</button>
                                        </form>
                                    </div>
                                @endif
                            </div>

                            <h3 class="text-break"> {{ $user->profile->description ?? "This user doesn't have a description"}} </h3>
                        </div>
                    </div>


                    @if ($user->profile->phone != NULL || $user->profile->email != NULL)

                    <div class="row pt-5">
                        <div class="offset-2 col-8 offset-2">
                            <div class="d-flex align-content-between align-items-baseline">
                                <h1 class="text-capitalize">Contact Information</h1>
                                @if($user->id === auth()->user()->id)
                                    <div class="button pl-3">
                                        <form action="{{ route('profile.edit', ['user' => $user->id])}}" method='get'>
                                            <button type='submit' class="btn btn-primary">Edit</button>
                                        </form>
                                    </div>
                                @endif
                            </div>

                            @if ($user->profile->phone != NULL)
                                <h3 class="pt-3">Phone: {{ $user->profile->phone }}</h3>
                            @endif

                            @if ($user->profile->email != NULL)
                            <h3 class="pt-3">Email: {{ $user->profile->email }}</h3>
                            @endif
                        </div>
                    </div>

                    @endif

                </div>
            </div>
        </div>
    </body>
</html>

@endsection
