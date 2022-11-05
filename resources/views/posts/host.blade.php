<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/post.css') }}">
        <script src="{{ asset('js/post.js') }}"></script>
        
    </head>
    <body>
        <div class="host-title-box">
            <img src="../img/sample.jpeg" class="host-title-image">
            <h1 class="host-title">Back To Club</h1>
           
        </div>
        <div>
            <h2 class="host-subtitle">サークル投稿者用画面</2>
        </div>
        
        <a href="/creates">サークルを作る</a>
        <a href="/members">メンバーを探す</a>
        
        <div class="host-grid">
            @foreach ($posts as $post)
            
            <div class='host-container'>
               
                    
                        
                    <div class="host-item-clubname">    
                        <h2 class='host-clubname'>{{ $post->clubname }}</h2> 
                    </div>
                    
                    <div class="host-item-path">    
                         @if ($post->image_path)
                         <!-- 画像を表示 -->
                        
                       <img src="{{ $post->image_path }}" class="host-image">
                    </div> 
                    @endif      
                        
                    <div class="host-item-sport">    
                       <h3 class="host-sport-title">行うスポーツ</h3>
                        @foreach($post->sports as $sport)
                        <p class='host-sport'>{{ $sport->sport_name }}</p>
                        @endforeach
                    </div>    
                        
                        
                    <div class="host-item-place">   
                        <h3 class="host-place-title">主な活動エリア</h3>
                        <p class='host-place'>{{ $post->place }}</p>
                    </div>    
                    
                    <div class="host-item-activity">    
                        <h3 class=host-activity-title>活動詳細</h3>
                        <p class='host-activity'>{{ $post->activity }}</p>
                    </div>
                    
                    <div class="host-item-condition">    
                        <h3 class="host-condition-title">募集条件</h3>
                        <p class='host-condition'>{{ $post->condition }}</p>
                    </div>    
                        
                      
                        
                    <div class="host-item-edit">    
                        
                        [<a href="/posts/{{ $post->id }}/edit">投稿を編集する</a>]
                    </div> 
                    
                    <div class="host-item-delete">
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                              @csrf
                               @method('DELETE')
                               <button type="button" onclick="deletePost({{ $post->id }})">投稿を削除する</button> 
                               
                         </form>
                    </div>
            </div>           
                @endforeach
        </div>

            
        
         <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
        
        
    </body>
</html>