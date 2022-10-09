<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
        
       <h1>アクティヴな仲間を探す</h1>
        
        <div class='posts'>
            
            @foreach ($actives as $active)
                <div class='post'>
                   
                    <div class="active-info">
                        <a href='/users/{{$active->user_id}}'>{{ $active->user->name }}</a>
                        <p>{{ $active->created_at }}</p>
                    </div>
                    
                    
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
        
        
        <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
        
       
    </body>
</html>