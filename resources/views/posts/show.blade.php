<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    </head>
    <body>
       
        <div class="show-contents">
                <article>      
                
                    <div class="show-container">
                            <div class="show-item-clubame">
                                <h1 class="show-clubname-title">
                                　{{ $post->clubname }}
                                </h1>
                            </div>   
                     
                
                            <div class="show-item-image">    
                                <h3 class="show-image-title">活動写真</h3>
                                     @if ($post->image_path)
                                 <!-- 画像を表示 -->
                                        
                                <img src="{{ $post->image_path }}" class="show-image">
                            @endif
                            </div>          
                                    
                                 
                            <div class="show-item-sport">　   
                             　<h3 class="show-sport-title">行うスポーツ</h3>
                                    @foreach($post->sports as $sport)
                                <p class='show-sport'>{{ $sport->sport_name }}</p>
                            @endforeach
                            </div>  
                            
                                    
                             　
                            <div class="show-item-place">　
                             　<h3 class="show-place-title">主な活動エリア</h3>
                            　 <p class='show-place'>{{ $post->place }}</p>    
                            </div>    
                                
                            <div class="show-item-activity">    
                             　<h3 class="show-activity-title">活動詳細</h3>
                             　<p class="show-activity">{{ $post->activity }}</p> 
                            </div>
                            
                            <div class="show-item-condition"> 　
                             　<h3 class="show-condition-title">募集条件</h3>
                             　<p class='show-condition'>{{ $post->condition }}</p>
                            </div>
                            
                            <div class="account-item-instagram">
                               <a href="https://instagram.com/{{$post->insta}}"><img src="../img/insta.jpeg"class="account-insta"></a>
                            </div>    
                    
                            <a href='/accounts/{{$post->user_id}}'>{{ $post->user->name }}</a>
                    </div>
                </article>     
                     
                    <aside>
                        <h2>その他のサークルを見る</h2>
                           <div class="aside-grid">
                                @foreach ($posts as $subpost)
                                
                                
                                @if(!($subpost->id === $post->id))
                                
                                    <div class='post'>
                                        
                                         <a href="/posts/{{ $subpost->id }}"><h2 class='aside-title'>{{ $subpost->clubname }}</h2></a>
                                        <!--画像処理-->
                                         @if ($subpost->image_path)
                                         <!-- 画像を表示 -->
                                        
                                       <img src="{{ $subpost->image_path }}"class="aside-image">
                                      
                                        @endif
                                        
                                        <div class="content-first">
                                            <h3>行うスポーツ</h3>
                                            @foreach($subpost->sports as $sport)
                                            <p class='sport'>{{ $sport->sport_name }}</p>
                                        
                                            @endforeach
                                         </div>   
                                        
                                        <h3>主な活動エリア</h3>
                                        <p class='place'>{{ $subpost->place }}</p>
                                        
                                        <h3>活動詳細</h3>
                                        <p class='activity'>{{ $subpost->activity }}</p>
                                        
                                        <h3>募集条件</h3>
                                        <p class='condition'>{{ $subpost->condition }}</p>
                                        
                                        
                                    </div>
                                  @endif  
                                @endforeach
                            </div>
                    </aside>
            </div>       
           
        <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
        
    </body>

        
        
       
    </body>
</html>