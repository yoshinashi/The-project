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
            
        </header>
        
       
        <div class="index-top">
                <h1 class="index-title">ClubStand</h1>
        </div>
        
        
        
      <div>    
        @if( Auth::check() )
                <a href="/hosts">サークル投稿者画面へ</a>
                
                
                <!--プロフィール登録してない人をさせる様に実装する-->
                <a href="/users">個人活動投稿画面へ</a>
                @endif
                
                
                
                @guest
                  <p>ClubStandでできること</p>
                  
                  <p>ClubStandは様々なスポーツの団体を作ることができ、スポーツを通して人生を楽しむコミュニティの形成が可能です</p>
                @endguest
       </div> 
        
        
        <h2 class=""></h2>
        
        <div>
          <form action="{{ route('posts.index') }}" method="GET">
            <input type="text" name="keyword" value="{{ $keyword }}" placeholder="地域で検索">
           
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
        
        
        
        
        
        
        <div class="">
            <h2 class="index-subtitle">サークル一覧</h2>
            <div class="item">
                <div class='grid'>
                    
                    @foreach ($posts as $post)
                        <div class='post'>
                             
                            <a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->clubname }}</h2></a>
                            <div>
                                 @if ($post->image_path)
                                 <!-- 画像を表示 -->
                                
                               <img src="{{ $post->image_path }}"class="index-image">
                            </div>
                                @endif
                            
                            <div class="content-first">
                                    <p>行うスポーツ</p>
                                    @foreach($post->sports as $sport)
                                    <p class='sport'>{{ $sport->sport_name }}</p>
                                
                                    @endforeach
                             </div>   
                             
                             <div>
                                 <p>主な活動エリア</p>  <p class='place'>{{ $post->place }}</p>
                             </div>
                        
                            <p>活動詳細</p>
                            <p class='activity'>{{ $post->activity }}</p>
                        </div>
                        
                    @endforeach
                </div>
             </div>   
        </div>
        
        <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
       
    </body>
</html>