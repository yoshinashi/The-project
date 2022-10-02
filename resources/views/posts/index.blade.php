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
                    
                    <h3>行うスポーツ</h3>
                    <p class='sport'>{{ $post->sport }}</p>
                    
                    <h3>主な活動エリア</h3>
                    <p class='place'>{{ $post->place }}</p>
                    
                    <h3>活動詳細</h3>
                    <p class='activity'>{{ $post->activity }}</p>
                    
                    <h3>募集条件</h3>
                    <p class='condition'>{{ $post->condition }}</p>
                    
                    <h3>活動写真</h3>
                     @if ($post->image_path)
                     <!-- 画像を表示 -->
                     <p>{{ $post->image_path }}</p>
                   <img src="{{ $post->image_path }}">
                    @endif
                </div>
                
            @endforeach
        </div>
        
        
       
    </body>
</html>