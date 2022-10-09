<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
         
       <h1>{{ $active->user->name }}</h1>
       
       <h2>個人活動の投稿</h2>
       <h2>このアカウントが運営しているサークルの投稿</h2>
        
        <div class='actives'>
            
            
            
            @foreach ($actives as $active)
                <div class='post'>
                   
                    
                    <p>{{ $active->created_at }}</p>
                   
                    
                    
                    <h3>活動詳細</h3>
                    <p class='name'>{{ $active->activity }}</p>
                    
                    <h3>活動写真</h3>
                     @if ($active->image_active)
                     <!-- 画像を表示 -->
                    
                   <img src="{{ $active->image_active}}">
                  
                    @endif
                </div>
                
            @endforeach
        </div>
        
            <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='clubname'>{{ $post->clubname }}</h2> 
                    
                    <h3>活動写真</h3>
                     @if ($post->image_path)
                     <!-- 画像を表示 -->
                    
                   <img src="{{ $post->image_path }}">
                    @endif
                    
                   <h3>行うスポーツ</h3>
                    @foreach($post->sports as $sport)
                    <p class='sport'>{{ $sport->sport_name }}</p>
                    @endforeach
                    
                    <h3>主な活動エリア</h3>
                    <p class='place'>{{ $post->place }}</p>
                    
                    <h3>活動詳細</h3>
                    <p class='activity'>{{ $post->activity }}</p>
                    
                    
                    <h3>募集条件</h3>
                    <p class='condition'>{{ $post->condition }}</p>
                </div>
                    @endforeach
            </div>
           
                    <div class="footer">
                        <a href="/users">戻る</a>
                    </div>
        
    </body>
</html>