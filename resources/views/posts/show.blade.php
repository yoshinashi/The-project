<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
       
        
          
        
         
        <h1 class="clubname">
            {{ $post->clubname }}
        </h1>
        
       
                   
        <div class="content">
            
            <h3>活動写真</h3>
                     @if ($post->image_path)
                     <!-- 画像を表示 -->
                    
                   <img src="{{ $post->image_path }}">
                  
                    @endif
             
        　　<h3>行うスポーツ</h3>    
         　<p class='sport'>{{ $post->sport }}</p>
         　
         　<h3>主な活動エリア</h3>
        　 <p class='place'>{{ $post->place }}</p>    
            
         　<h3>活動詳細</h3>
         　<p>{{ $post->activity }}</p>    
         　
         　<h3>募集条件</h3>
         　<p class='condition'>{{ $post->condition }}</p>
        </div>
           
           
        <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
        
    </body>

        
        
       
    </body>
</html>