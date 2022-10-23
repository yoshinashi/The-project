<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/post.css') }}">
        

    </head>
    <body class="antialiased">
        
        <header>
            
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">会員登録</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
             <div>    
                @if( Auth::check() )
                
                      
                        <a href="/hosts"><h2 class="host-link">サークル投稿者画面へ</h2></a>
                     
                        <!--プロフィール登録してない人をさせる様に実装する-->
                      
                        <a href="/users"><h2 class="user-link">個人活動投稿画面へ</h2></a>
                        @endif
                       
                        
                        
                        @guest
                          <p>Back To Clubでできること</p>
                          
                          <p>Back To Clubは様々なスポーツの団体を作ることができ、スポーツを通して人生を楽しむコミュニティの形成が可能です</p>
                        @endguest
               </div> 
            
        </header>
        
    <div class="index-top">   
                <div class="index-top-title">
                        <h1 class="index-title">Back To Club</h1>
                </div>
                
                <div class="index-top-contents">
                    <div class=index-main-subtitle>    
                        <h2 class="index-subtitle">サークル一覧</h2>
                    </div>
                    
                    <div class="index-hit">
                        <h3 class="hit-title">検索する</h3>
                          <form action="{{ route('posts.index') }}" method="GET">
                            <input type="text" name="keyword" value="{{ $keyword }}" placeholder="地域で検索"><br>
                           
                             @foreach($sports as $sport)
                        
                                <label>
                                    {{-- valueを'$subjectのid'に、nameを'配列名[]'に --}}
                                    <input type="checkbox" value="{{ $sport->id }}" name="sports_array[]">
                                        {{$sport->sport_name}}
                                    </input>
                                </label>
                                    
                                @endforeach   
                            <input type="submit" value="検索">
                          </form>
                    </div>
                </div>    
    </div>       
    
    
        
        <div class="index-main">
                <div class='index-grid'>
                        
                            @foreach ($posts as $post)
                            <div class='index-container'>
                                 
                                <div class="index-item-clubname"> 
                                    <a href="/posts/{{ $post->id }}"><h2 class='index-clubname'>{{ $post->clubname }}</h2></a>
                                </div>
                                
                                <div class="index-item-image">
                                     @if ($post->image_path)
                                     <!-- 画像を表示 -->
                                    
                                   <img src="{{ $post->image_path }}"class="index-image">
                                </div>
                                    @endif
                                
                                <div class="index-item-sport">
                                        <h4 class="index-title-sport">行うスポーツ</h4>
                                        @foreach($post->sports as $sport)
                                        <p class='index-sport'>{{ $sport->sport_name }}</p>
                                    
                                        @endforeach
                                 </div>   
                                 
                                 <div class="index-item-place">
                                     <h4 class="index-title-place">主な活動エリア</h4>
                                     <p class='index-place'>{{ $post->place }}</p>
                                 </div>
                            
                                <div class="index-item-activity">
                                    <h4 class="index-title-activity">活動詳細</h4>
                                    <p class='index-activity'>{{ $post->activity }}</p>
                                </div>    
                            </div>
                             @endforeach
                </div>
        </div>            
        
        <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
       
    </body>
</html>