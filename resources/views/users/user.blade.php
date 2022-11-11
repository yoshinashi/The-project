<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/user.css') }}">
         <meta name="viewport" content="width=device-width,initial-scale=1">
        <script src="{{ asset('js/user.js') }}"></script>
    </head>
    <body class="user-body">
                <div class='user-profile-container'>
                    @if(isset( $profile ))
                    <div class="user-profile-item-name">
                        <h2 class='user-profile-name'>{{ $profile->name }}</h2> 
                    </div>    
                    
                    <div class="user-profile-item-image">
                        <img src="{{ $profile->image_name}}" class="user-profile-image">
                    </div>    
                    
                    <div class="user-profile-item-sex">
                        <p class="user-profile-info">性別<p>
                        <p class='user-profile-sex'>{{ $profile->sex }}</p>
                    </div>
                    
                    <div class="user-profile-item-age">
                        <p class="user-profile-info">年齢<p>
                        <p class='user-profile-age'>{{ $profile->age}}</p>
                    </div>
                    
                    <div class="user-profile-item-sport">
                        <p class="user-profile-info">経験したスポーツ<p>
                        <p class='user-profile-sport'>{{ $profile->sport }}</p>
                    </div>
                    
                    <div class="user-profile-item-profile">
                        <p class="user-profile-info">プロフィール<p>
                        <p class='user-profile-profile'>{{ $profile->profile }}</p>
                    </div>
                    
                    <div class="user-profile-item-place">
                        <p class="user-profile-info">地域<p>
                        <p class='user-profile-place'>{{ $profile->place }}</p>
                    </div>
                      
                    <div class="user-profile-item-edit">    
                        <a href="/remakes" class="user-profile-edit">[プロフィール編集]</a>
                    </div>    
                    @else
                        <p>プロフィールが登録されていません</p>
                        <a href="/profiles">プロフィールを登録する</a>
                    @endif
                    
                </div>
                
        <div class="user-div">
            <a href="/indexes"class="back-index">[ホームに戻る]</a>
            
            <a href="/actives"class="jump-act">[アクティビティを投稿する]</a>
        </div>
        
        <h1 class="user-main-title">活動の投稿</h1>
    

        <div class="user-main-contents">
            @foreach ($actives as $active)
                <div class='user-active-container'>
                            
                    <div class="user-active-item-create">        
                        <h3 class="user-create-subtitle">投稿日</h3>
                        <p class="user-active-create">{{ $active->created_at }}</p>
                    </div>    
                    
                    <div class="user-active-item-activity">
                        <h3 class="user-active-subtitle">活動詳細</h3>
                        <p class='user-active-activity'>{{ $active->activity }}</p>
                    </div>        
                            
                    <div class="user-active-item-image">        
                        <h3 class="user-active-subtitle">活動写真</h3>
                         @if ($active->image_active)
                             <!-- 画像を表示 -->
                            
                          <img src="{{ $active->image_active}}" class="user-active-image">
                          
                        @endif
                    </div>
                        
                        <div class="user-active-item-edit">
                           <p><a href="/users/{{ $active->id }}/edit" class="user-active-edit">投稿の修正</a></p>
                        </div>    
                        
                        <div class="user-active-item-delete">
                            <form action="/users/{{ $active->id }}" id="form_{{ $active->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deletePost({{ $active->id }})"class="active-delete">この投稿を消去する</button> 
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