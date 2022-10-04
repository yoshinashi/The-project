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
        
        <h2>サークル投稿者用画面</2>
        
        
        <a href="/creates">サークルを作る</a>
        <a href="/members">メンバーを探す</a>
        
        
        
         <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='clubname'>{{ $post->clubname }}</h2> 
                    
                    <h3>行うスポーツ</h3>
                    <p class='sport'>{{ $post->sport }}</p>
                    
                    <h3>主な活動エリア</h3>
                    <p class='place'>{{ $post->place }}</p>
                    
                    <h3>活動詳細</h3>
                    <p class='activity'>{{ $post->activity }}</p>
                    
                    
                    <p class='condition'>{{ $post->condition }}</p>
                    
                    <h3>活動写真</h3>
                     @if ($post->image_path)
                     <!-- 画像を表示 -->
                    
                   <img src="{{ $post->image_path }}">
                    @endif
                    
                    <h3>募集条件</h3>
                    [<a href="/posts/{{ $post->id }}/edit">投稿を編集する</a>]
                    
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                          @csrf
                           @method('DELETE')
                           <button type="submit">投稿を削除する</button> 
                     </form>
                    
                </div>
            @endforeach
        </div>
        
        
         <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
        
        
        
    </body>
</html>