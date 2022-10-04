<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
        
       <h1>みんなのアクティビティ</h1>
        
        <div class='posts'>
            @foreach ($profiles as $profile)
                <div class='profile'>
                   
                     <a href="/users/{{ $profile->id }}"><h2 class='name'>{{ $profile->name }}</h2></a>
                     
                      
                     @if ($profile->image_name)
                     <!-- 画像を表示 -->
                    
                   <img src="{{ $profile->image_name}}">
                    @endif
                    
                    <p class='sex'>{{ $profile->sex }}</p>
                    <p class='birthday'>{{ $profile->birthday }}</p>
                    <p class='sport'>{{ $profile->sport }}</p>
                    <p class='profile'>{{ $profile->place }}</p>
                    <p class='profile'>{{ $profile->profile }}</p>
                    
                    
                </div>
            @endforeach
        </div>

        
        <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
        
       
    </body>
</html>