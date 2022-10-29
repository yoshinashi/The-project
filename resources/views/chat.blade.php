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
        <script src="{{ asset('js/comment.js') }}"></script>
    </head>
    
    
    <body>
        
        
        <div class="chat-container row justify-content-center">
            <div class="chat-area">
                <div class="card">
                    <div class="card-header">Comment</div>
                    <div class="card-body chat-card">
                         <div id="comment-data"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <form method="POST" action="{{route('add')}}">
            @csrf
            <div class="comment-container row justify-content-center">
                <div class="input-group comment-area">
                    <textarea class="form-control" id="comment" name="comment" placeholder="push massage (shift + Enter)"
                        aria-label="With textarea"
                        onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').click();return false};"></textarea>
                    <button type="submit" id="submit" class="btn btn-outline-primary comment-btn">Submit</button>
                </div>
            </div>
        </form>
            
    </body>        
    