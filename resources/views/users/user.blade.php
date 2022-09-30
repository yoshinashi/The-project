<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>マイプロフィールページ</h1>
        
        
        
        
        <a href="/profiles">プロフィールを登録する</a>
        
        
        
        
         <div class='profiles'>
             
             @foreach ($profiles as $profile)

                <div class='post'>
                    <h2 class='name'>{{ $profile->name }}</h2> 
                    
                    <p class='sex'>{{ $profile->sex }}</p>
                    <p class='sport'>{{ $profile->sport }}</p>
                    <p class='profile'>{{ $profile->profile }}</p>
                    <p class='profile'>{{ $profile->place }}</p>
                    
                </div>
           
        </div>
        @endforeach
        
         <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
        
    </body>
</html>