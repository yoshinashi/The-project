<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/post.css') }}">
        <script src="{{ asset('js/post.js') }}"></script>
    </head>
    <body class="show-body">
        <div class="show-contents">
             
                <article>      
                    <h2 class="article-main-title">サークル情報</h2>
                
                    <div class="show-container">
                            <div class="show-item-clubname">
                                <h1 class="show-clubname-title">
                                　{{ $post->clubname }}
                                </h1>
                            </div>   
                     
                
                            <div class="show-item">    
                                <h3 class="show-image-title">活動写真</h3>
                                     @if ($post->image_path)
                                 <!-- 画像を表示 -->
                                        
                                <img src="{{ $post->image_path }}" class="show-image">
                            @endif
                            </div>          
                                    
                                 
                            <div class="show-item">　   
                             　<h3 class="show-sport-title">行うスポーツ</h3>
                                    @foreach($post->sports as $sport)
                                <p class='show-sport'>{{ $sport->sport_name }}</p>
                            @endforeach
                            </div>  
                            
                                    
                             　
                            <div class="show-item">　
                             　<h3 class="show-place-title">主な活動エリア</h3>
                            　 <p class='show-place'>{{ $post->place }}</p>    
                            </div>    
                                
                            <div class="show-item">    
                             　<h3 class="show-activity-title">活動詳細</h3>
                             　<p class="show-activity">{{ $post->activity }}</p> 
                            </div>
                            
                            <div class="show-item"> 　
                             　<h3 class="show-condition-title">募集条件</h3>
                             　<p class='show-condition'>{{ $post->condition }}</p>
                            </div>
                            
                            <div class="show-item">
                                <h3 class="show-insta-title">このサークルのインスタを見る</h3>
                               <a href="https://instagram.com/{{$post->insta}}"><img src="../img/insta.jpeg"class="show-insta"></a>
                            </div>    
                            
                            <div class="show-item">
                                <h3 class="show-user-title">この投稿をしたユーザー</h3>
                                <a href='/accounts/{{$post->user_id}}' class="show-user">{{ $post->user->name }}</a>
                            </div>
                    </div>
                    
                    
                </article>     
                     
                    <aside>
                        <div class="aside-container">
                            <div class="aside-item-title">
                                <h2 class="aside-main-title">その他のサークルを見る</h2>
                            </div>    
                               <div class="aside-grid">
                                    @foreach ($posts as $subpost)
                                    
                                    
                                    @if(!($subpost->id === $post->id))
                                    
                                        <div class='aside-contents'>
                                            <div class="aside-item-clubnmae">
                                                <a href="/posts/{{ $subpost->id }}" class="aside-link"><h2 class='aside-title'>{{ $subpost->clubname }}</h2></a>
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
           
        <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
        

    </body>

        
        
       
    
</html>