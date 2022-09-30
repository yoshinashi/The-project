<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
        
       <h1>登録者一覧</h1>
        
        <div class='posts'>
            @foreach ($profiles as $profile)
                <div class='profile'>
                   
                     <a href="/users/{{ $profile->id }}"><h2 class='name'>{{ $profile->name }}</h2></a>
                    
                    
                    <p class='sex'>{{ $profile->sex }}</p>
                    <p class='sport'>{{ $profile->sport }}</p>
                    <p class='profile'>{{ $profile->profile }}</p>
                    <p class='profile'>{{ $profile->place }}</p>
                    
                </div>
            @endforeach
        </div>
        
        
        <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
        
       
    </body>
</html>