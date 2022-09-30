<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
        <h1>ClubStand</h1>
        <a href="/hosts">サークルを作る</a>
        <a href="/users">プロフィールを登録する</a>
        
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                   
                      <a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->clubname }}</h2></a>
                    
                    <p class='sport'>{{ $post->sport }}</p>
                    <p class='place'>{{ $post->place }}</p>
                    <p class='activity'>{{ $post->activity }}</p>
                    <p class='condition'>{{ $post->condition }}</p>
                </div>
            @endforeach
        </div>
        
        
       
    </body>
</html>