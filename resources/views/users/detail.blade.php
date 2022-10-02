<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
        <h1 class="name">
            {{ $profile->name }}
        </h1>
        
        <div class="content">
            
            <h3>性別</h3>
           <p>{{ $profile->sex }}</p>  
           
            <h3>年齢層</h3>
           <p>{{ $profile->birthday }}</p>
           
           <h3>経験・興味のあるスポーツ</h3>
           <p>{{ $profile->sport }}</p>
           
           <h3>住んでいる地域</h3>
           <p>{{ $profile->place }}</p>  
            
           <h3>マイプロフィール</h3>
           <p>{{ $profile->profile }}</p>    
            
        </div>
           
           
        <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
        
    </body>
</html>