<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/post.css') }}">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <script src="{{ asset('js/post.js') }}"></script>
    </head>
    <body class="show-body">
        <div class="show-contents">
             
                <article>      
                    <h1 class="article-main-title">サークル情報</h1>
                
                    <div class="show-container">
                            <div class="show-item-clubname">
                                <h2 class="show-clubname-title">
                                　{{ $post->clubname }}
                                </h2>
                            </div>   
                     
                
                            <div class="show-item">    
                                <h3 class="show-subtitle">活動写真</h3>
                                     @if ($post->image_path)
                                 <!-- 画像を表示 -->
                                        
                                <img src="{{ $post->image_path }}" class="show-image">
                            @endif
                            </div>          
                                    
                                 
                            <div class="show-item">　   
                             　<h3 class="show-subtitle">行うスポーツ</h3>
                                    @foreach($post->sports as $sport)
                                <p class='show-sport'>{{ $sport->sport_name }}</p>
                            @endforeach
                            </div>  
                            
                                    
                             　
                            <div class="show-item">　
                             　<h3 class="show-subtitle">主な活動エリア</h3>
                            　 <p class='show-place'>{{ $post->place }}</p>    
                            </div>    
                                
                            <div class="show-item">    
                             　<h3 class="show-subtitle">活動詳細</h3>
                             　<p class="show-activity">{{ $post->activity }}</p> 
                            </div>
                            
                            <div class="show-item"> 　
                             　<h3 class="show-subtitle">募集条件</h3>
                             　<p class='show-condition'>{{ $post->condition }}</p>
                            </div>
                            
                            <div class="show-item">
                                <h3 class="show-subtitle">このサークルのインスタを見る</h3>
                               <a href="https://instagram.com/{{$post->insta}}"><img src="../img/insta.jpeg"class="show-insta"></a>
                            </div>    
                            
                            <div class="show-item">
                                <h3 class="show-subtitle">この投稿をしたユーザー</h3>
                                <a href='/accounts/{{$post->user_id}}' class="show-user">{{ $post->user->name }}</a>
                            </div>
                    </div>
                    
                    
                </article>     
                    <aside>
                        <div class="aside-container">
                            <div class="aside-item-title">
                                <h2 class="aside-main-title">他のサークルを見る</h2>
                            </div>    
                               <div class="aside-grid">
                                    @foreach ($posts as $subpost)
                                    
                                    
                                    @if(!($subpost->id === $post->id))
                                    
                                        <div class='res-aside-contents'>
                                            <div class="aside-item-clubnmae">
                                                <a href="/posts/{{ $subpost->id }}" class="aside-link"><h2 class="res-aside-title">{{ $subpost->clubname }}</h2></a>
                                            </div>
                                            
                                            <div class="aside-item-image">
                                                <!--画像処理-->
                                                 @if ($subpost->image_path)
                                                 <!-- 画像を表示 -->
                                                
                                               <img src="{{ $subpost->image_path }}"class="aside-image">
                                              
                                                @endif
                                            </div>    
                                            
                                            <div class="aside-item-activity">
                                                <h3 class="aside-subtitle">活動詳細</h3>
                                            
                                                <p class='aside-activity'>{{ $subpost->activity }}</p>
                                            </div>    
                                        </div>
                                      @endif  
                                    @endforeach
                                </div>
                        </div>        
                    </aside>
            </div>       
            
            
            
            
            <div class="res-show-contents">
             
                    
                    <h1 class="res-main-title">サークル情報</h1>
                
                <div class="res-main-container">     
                            <div class="res-show-item-clubname">
                                <h2 class="res-show-clubname-title">
                                　{{ $post->clubname }}
                                </h2>
                            </div>   
                     
                
                            <div class="res-show-item">    
                                <h3 class="res-show-subtitle">活動写真</h3>
                                     @if ($post->image_path)
                                 <!-- 画像を表示 -->
                                        
                                <img src="{{ $post->image_path }}" class="res-show-image">
                            @endif
                            </div>          
                                    
                                 
                            <div class="res-show-item">　   
                             　<h3 class="res-show-subtitle">行うスポーツ</h3>
                                    @foreach($post->sports as $sport)
                                <p class='res-show-sport'>{{ $sport->sport_name }}</p>
                            @endforeach
                            </div>  
                            
                                    
                             　
                            <div class="res-show-item">　
                             　<h3 class="res-show-subtitle">主な活動エリア</h3>
                            　 <p class='res-show-place'>{{ $post->place }}</p>    
                            </div>    
                                
                            <div class="res-show-item">    
                             　<h3 class="res-show-subtitle">活動詳細</h3>
                             　<p class="res-show-activity">{{ $post->activity }}</p> 
                            </div>
                            
                            <div class="res-show-item"> 　
                             　<h3 class="res-show-subtitle">募集条件</h3>
                             　<p class='res-show-condition'>{{ $post->condition }}</p>
                            </div>
                            
                            <div class="res-show-item">
                                <h3 class="res-show-subtitle">サークルのインスタを見る</h3>
                               <a href="https://instagram.com/{{$post->insta}}"><img src="../img/insta.jpeg"class="res-show-insta"></a>
                            </div>    
                            
                            <div class="res-show-item">
                                <h3 class="res-show-subtitle">この投稿をしたユーザー</h3>
                                <a href='/accounts/{{$post->user_id}}' class="res-show-user">[{{ $post->user->name }}]</a>
                            </div>
                </div>
                    
                    
                  
                   
                       
                <div class="res-aside-item-title">
                    <h2 class="res-aside-main-title">他のサークルを見る</h2>
                </div>    
                
                
                 <div class="res-aside-container">    
                       
                            @foreach ($posts as $subpost)
                            
                            
                            @if(!($subpost->id === $post->id))
                            
                                <div class='res-aside-contents'>
                                    <div class="res-aside-item-name">
                                        <a href="/posts/{{ $subpost->id }}" class="res-aside-link"><h2 class='res-aside-title'>{{ $subpost->clubname }}</h2></a>
                                    </div>
                                    
                                    <div class="res-aside-item-image">
                                        <!--画像処理-->
                                         @if ($subpost->image_path)
                                         <!-- 画像を表示 -->
                                        
                                       <img src="{{ $subpost->image_path }}"class="aside-image">
                                      
                                        @endif
                                    </div>    
                                    
                                    <div class="res-aside-item-activity">
                                        <h3 class="res-aside-subtitle">活動詳細</h3>
                                    
                                        <p class='res-aside-activity'>{{ $subpost->activity }}</p>
                                    </div>    
                                </div>
                              @endif  
                            @endforeach
                        
                </div>        
                    
            </div>       
           
        <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
        

    </body>

        
        
       
    
</html>