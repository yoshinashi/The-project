<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>自分のアクティビティを投稿する</h1>
        
        
        
        
        <a href="/actives">アクティビティを投稿する</a>
        
        
        <a href="/remakes">プロフィールの編集</a>
        
        
        <div class='profiles'>
                <div class='profile'>
                    @if(isset( $profile ))

                    <h2 class='name'>{{ $profile->name }}</h2> 
                    
                    
                    
                     <!-- 画像を表示 -->
                    
                   　<img src="{{ $profile->image_name}}">
                    
                    
                    <p class='sex'>{{ $profile->sex }}</p>
                    <p class='birthday'>{{ $profile->birthday }}</p>
                    <p class='sport'>{{ $profile->sport }}</p>
                    <p class='profile'>{{ $profile->profile }}</p>
                    <p class='profile'>{{ $profile->place }}</p>
                    
                      
                    
                    
                    @else
                        <p>プロフィールが登録されていません</p>
                    @endif
                    
                    
                </div>

       

        
         
        
         <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
        
    </body>
</html>