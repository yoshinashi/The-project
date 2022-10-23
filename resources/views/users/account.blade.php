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
        <div class="account-top-container"> 
            <div class="account-item-name">
                <h1 class="account-name">{{ $active->user->name }}</h1>
            </div>   
            
            <div class="account-item-profile-name">
                <p class="name-p">ニックネーム</p>
                <p class="second-name">{{ $profile->name }}</p>
            </div>
            
            <div class="account-item-image">
                <img src="{{$profile->image_name}}" class="account-image">
            </div>  
            
            <div class="account-item-sex">
                <p class="account-sex">{{$profile->sex}}</p>
            </div>
            
            <div class="account-item-age">
                <p class='account-age'>{{ $profile->age}}</p>
            </div>
            
            <div class="account-item-sport">
                <p class='account-sport'>{{ $profile->sport }}</p>
            </div>
            
            <div class="account-item-profile">
                <p class='account-profile'>{{ $profile->profile }}</p>
            </div>
            
            <div class="account-item-place">
                <p class='account-place'>{{ $profile->place }}</p>
            </div>    
        </div>
       
        <div class="account-btn">
            <button type="button" name="active" id="active_button"class="account-button">個人活動の投稿</button>
            <button type="button" name="post" id ="post_button"class="account-button">このアカウントが運営しているサークルの投稿</button>
            <button typd="button" name="all" id ="all_button"class="account-button">全投稿表示</button>
        </div>
        
    <div class="account-grid">  
            <div id='active'>
                <h2 class="account-active-title">個人活動</h2> 
                @foreach ($actives as $active)
                    <div class="account-active-container">
                       
                        <div class="account-active-item-create">
                            <h3>投稿日</h3>
                            <p>{{ $active->created_at }}</p>
                        </div>    
                        
                        <div class="account-active-item-image">
                            <h3>活動写真</h3>
                             @if ($active->image_active)
                             <!-- 画像を表示 -->
                          
                           <img src="{{ $active->image_active}}" class="account-active-image">
                          
                            @endif
                        </div>  
                        
                        <div class="account-active-item-activity">
                            <h3>活動詳細</h3>
                            <p class='name'>{{ $active->activity }}</p>
                        </div>    
                    </div>
                    
                 @endforeach
            </div>
       
       
        
      
        <div id='post'>
            <h2 class="account-post-title">サークル投稿</h2>
            @foreach ($posts as $post)
                <div class="account-post-container">
                    
                    <div class="account-post-item-clubname">
                        <h2 class='clubname'>{{ $post->clubname }}</h2> 
                    </div>
                    
                    <div class="account-post-item-image">
                        <h3>活動写真</h3>
                         @if ($post->image_path)
                         <!-- 画像を表示 -->
                        
                       <img src="{{ $post->image_path }}" class="account-post-image">
                        @endif
                    </div>  
                    
                    <div class="account-post-item-sport">
                       <h3>行うスポーツ</h3>
                        @foreach($post->sports as $sport)
                        <p class='sport'>{{ $sport->sport_name }}</p>
                        @endforeach
                    </div>   
                    
                    <div class="account-post-item-place">
                        <h3>主な活動エリア</h3>
                        <p class='place'>{{ $post->place }}</p>
                    </div>
                    
                    <div class="account-post-item-activity">    
                        <h3>活動詳細</h3>
                        <p class='activity'>{{ $post->activity }}</p>
                    </div>
                    
                    <div class="account-post-item-condition">    
                        <h3>募集条件</h3>
                        <p class='condition'>{{ $post->condition }}</p>
                    </div>
                 </div>   
                    @endforeach
        </div>
         
    </div>     
        <div class="footer">
            <a href="/users">戻る</a>
        </div>
       
        <script>
        
        const active = document.getElementById('active');
        const post = document.getElementById('post');
        const all = document.getElementById('all');
        
        const activeBtn = document.getElementById('active_button');
        activeBtn.addEventListener("click",function(){
            active.style.display ='block';
            post.style.display ='none';
        });
        
        const postBtn = document.getElementById('post_button');
        postBtn.addEventListener("click",function(){
            active.style.display ='none';
            post.style.display ='block';
        });
        
         const allBtn = document.getElementById('all_button');
        allBtn.addEventListener("click",function(){
            active.style.display ='block';
            post.display ='block';
        });
        </script>
    </body>
</html>