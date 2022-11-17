<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/post.css') }}">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <script src="{{ asset('js/post.js') }}"></script>
        
    </head>
    <body class="host-body">
        
        <header>
            <div class="host-header">    
                <a href="/creates" class="host-create-link">[サークルを作る・活動を投稿する]</a>
                <a href="/members" class="host-member-link">[メンバーを探す]</a>
            </div>
        </header>
        
        <div class="host-top-title">
            <h1 class="host-title">サークルホスト</2>
        </div>
        
        <h2 class="host-main-title">投稿一覧</h2>
        
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
                       <h3 class="host-subtitle">行うスポーツ</h3>
                        @foreach($post->sports as $sport)
                        <p class='host-sport'>{{ $sport->sport_name }}</p>
                        @endforeach
                    </div>    
                        
                        
                    <div class="host-item-place">   
                        <h3 class="host-subtitle">主な活動エリア</h3>
                        <p class='host-place'>{{ $post->place }}</p>
                    </div>    
                    
                    <div class="host-item-activity">    
                        <h3 class=host-subtitle>活動詳細</h3>
                        <p class='host-activity'>{{ $post->activity }}</p>
                    </div>
                    
                    <div class="host-item-condition">    
                        <h3 class="host-subtitle">募集条件</h3>
                        <p class='host-condition'>{{ $post->condition }}</p>
                    </div>    
                        
                      
                        
                    <div class="host-item-edit">    
                        
                        <a href="/posts/{{ $post->id }}/edit"class="host-edit">[投稿を編集する]</a>
                    </div> 
                    
                    <div class="host-item-delete">
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                              @csrf
                               @method('DELETE')
                               <button type="button" onclick="deletePost({{ $post->id }})"class="host-delete">[削除]</button> 
                               
                         </form>
                    </div>
            </div>           
                @endforeach
        </div>

            
        
         <div class="footer">
            <a href="/indexes" class="host-return">[戻る]</a>
        </div>
        
        
    </body>
</html>