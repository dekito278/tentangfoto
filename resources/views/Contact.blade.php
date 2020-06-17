

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'StoryPhoto') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
 
</head>
<style>
.center {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}
</style>
<body>
<div class="center">
    <div class="container">
        <div class="row">
            <div class="col-sm">


                <h4>Application abuse report</h4>
                <p>laporan penyalahgunaan aplikasi.</p>

                @if(Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif

                <form action="" method="post">

                    {{ csrf_field() }}

                    <label for="name">Judul pameran</label>
                    <input class="form-control" type="text" name="name" placeholder="Judul Pameran" />
                    
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Email kamu" />
                    
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="" placeholder="berikan penjelasan penyalahgunaan aplikasi" cols="30" rows="10"></textarea>

                    <br><br>

                    <button class="btn btn-success btn-block">Kirim</button>
                <form>
            </div>
        </div>
    </div>
</div>
</body>
@extends('layouts.app')
</html>