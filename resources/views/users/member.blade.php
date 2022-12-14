<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/user.css') }}">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>
    <body class="member-body">
        <div class="member-top-title">
            <h1 class="member-title">メンバーを探す</h1>
        </div>
        
        <div class="member-hit">
            <h2 class="member-hit-title">メンバーを探す</h2>  
          <form action="/members" method="GET">
            <input type="text" name="keyword" value="{{ $keyword }}"placeholder="活動内容で検索：例：テニスをした" class="member-research">
            <input type="submit" value="検索">
          </form>
        </div>
       
        
        <div class='member-grid'>
            @foreach ($actives as $active)
                <div class="member-container">
                   
                    <div class="member-active-item-create">
                        <p class="member-active-create">{{ $active->created_at }}</p>
                    </div>
                    
                    <div class="member-user-item-name">
                        <a href='/accounts/{{$active->user_id}}'><h4 class="member-user-name">{{ $active->user->name }}</h4></a>
                    </div>
                        
                    <div class="member-profile-item-image">    
                         <img src="{{ $active->user->profiles->image_name}}" class="member-profile-image">
                    </div>
                
                    <div class="member-active-item-image">
                        <h3 class="member-subtitle">活動写真</h3>
                         @if ($active->image_active)
                         <!-- 画像を表示 -->
                       
                       <img src="{{ $active->image_active}}" class="member-image" class="member-image">
                        @endif
                    </div> 
                    
                    <div class="member-active-item-activity">
                        <h3 class="member-subtitle">活動詳細</h3>
                        <p class="member-active-activity">{{ $active->activity }}</p>
                    </div>    
                    
                </div>
            @endforeach
        </div>
        
        
        <div class="back-div">
            <a href="/members"class="back-member">[一覧に戻る]</a>
            <a href="/indexes"class="back-index">[ホーム画面に戻る]</a>
        </div>
        
        <div class='paginate'>
            {{ $actives->links() }}
        </div>
       
    </body>
</html>