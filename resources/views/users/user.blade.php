<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/user.css') }}">
        <script src="{{ asset('js/user.js') }}"></script>
    </head>
    <body>
        
        
        <header>
            
            <div class='profiles'>
                <div class='user-container'>
                    @if(isset( $profile ))

                    <h2 class='user-item-name'>{{ $profile->name }}</h2> 
                    
                    
                    
                     <!-- 画像を表示 -->
                    
                   　<img src="{{ $profile->image_name}}" class="user-item-image">
                    
                    
                    <p class='user-item-sex'>{{ $profile->sex }}</p>
                    <p class='user-item-age'>{{ $profile->age}}</p>
                    <p class='user-item-sport'>{{ $profile->sport }}</p>
                    <p class='user-item-profile'>{{ $profile->profile }}</p>
                    <p class='user-item-place'>{{ $profile->place }}</p>
                    
                      
                    
                    
                    @else
                        <p>プロフィールが登録されていません</p>
                    @endif
                    
                    
                     <a href="/remakes" class="user-item-edit">プロフィール編集</a>
                </div>
                
            </div>
            
            
        </header>
        
        
        <h1 class="active-title">自分の投稿</h1>
        
        <a href="/profiles">プロフィールを登録する</a>
        
        <a href="/indexes">戻る</a>
        
        <a href="/actives">アクティビティを投稿する</a>
    

        <div class="user-main-contents">
                @foreach ($actives as $active)
            <div class='user-active-container'>
                        
                <div class="active-item-create">        
                    <h3 class="active-create-title">投稿日</h3>
                    <p class="active-create">{{ $active->created_at }}</p>
                </div>    
                
                <div class="active-item-activity">
                    <h3 class="active-subtitle">活動詳細</h3>
                    <p class='active-activity'>{{ $active->activity }}</p>
                </div>        
                        
                <div class="active-item-image">        
                    <h3 class="active-subtitle">活動写真</h3>
                     @if ($active->image_active)
                         <!-- 画像を表示 -->
                        
                      <img src="{{ $active->image_active}}" class="active-image">
                      
                    @endif
                </div>
                    
                    <div class="active-item-edit">
                       <p> [<a href="/users/{{ $active->id }}/edit" class="active-edit" >投稿を修正する</a>]</p>
                    </div>    
                    
                    <div class="active-item-delete">
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