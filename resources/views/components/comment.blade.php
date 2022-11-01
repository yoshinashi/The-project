<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/view.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        

    </head>

    <body>
        
    <div class="media">
        <div class="media-body comment-body">
            <div class="row">
                <span class="comment-body-user">{{$item->name}}</span>
                <span class="comment-body-time">{{$item->created_at}}</span>
            </div>
            <span class="comment-body-content">{!! nl2br(e($item->comment)) !!}</span>
        </div>
    </div>
            
    </body>        
    