<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="antialiased">
        
        <header>
            
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
        </header>
        
       
        
        <h1>ClubStand</h1>
        <a href="/hosts">サークル投稿者画面へ</a>
        <a href="/profiles">プロフィールを登録する</a>
        
        <!--プロフィール登録してない人をさせる様に実装する-->
        <a href="/users">ユーザー画面へ</a>
        
        <div class='posts'>
            
            @foreach ($posts as $post)
                <div class='post'>
                   
                      <a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->clubname }}</h2></a>
                    
                    <h3>行うスポーツ</h3>
                    <p class='sport'>{{ $post->sport }}</p>
                    
                    <h3>主な活動エリア</h3>
                    <p class='place'>{{ $post->place }}</p>
                    
                    <h3>活動詳細</h3>
                    <p class='activity'>{{ $post->activity }}</p>
                    
                    <h3>募集条件</h3>
                    <p class='condition'>{{ $post->condition }}</p>
                    
                    <h3>活動写真</h3>
                     @if ($post->image_path)
                     <!-- 画像を表示 -->
                    
                   <img src="{{ $post->image_path }}">
                  
                    @endif
                </div>
                
            @endforeach
        </div>
        
        
       
    </body>
</html>