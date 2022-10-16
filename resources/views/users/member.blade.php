<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    </head>
    <body>

       <h1>アクティヴな仲間を探す</h1>
       
       <div>
          <form action="/members" method="GET">
            <input type="text" name="keyword" value="{{ $keyword }}"placeholder="活動内容で検索：例：テニスをした" class="member-research">
            <input type="submit" value="検索">
          </form>
       </div>
       
        
        <div class='grid'>
            @foreach ($actives as $active)
                <div class='post'>
                   
                    <div class="active-info">
                        <p>{{ $active->created_at }}</p>
                        <a href='/users/{{$active->user_id}}'>{{ $active->user->name }}</a>
                    </div>
                    
                    
                    <h3>活動詳細</h3>
                    <p class='name'>{{ $active->activity }}</p>
                    
                    <h3>活動写真</h3>
                     @if ($active->image_active)
                     <!-- 画像を表示 -->
                    
                   <img src="{{ $active->image_active}}" class="member-image">
                  
                    @endif
                </div>
                
            @endforeach
        </div>
        
        
        <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
        
       
    </body>
</html>