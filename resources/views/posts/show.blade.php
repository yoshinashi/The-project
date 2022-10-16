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
                
                    <div class="item-clubame">
                        <h1 class="clubname">
                        　{{ $post->clubname }}
                        </h1>
                    </div>   
                     <div class="show-container">
                
                            <div class="item-image">    
                                <h3>活動写真</h3>
                                         @if ($post->image_path)
                                         <!-- 画像を表示 -->
                                        
                                       <img src="{{ $post->image_path }}" class="show-image">
                            </div>          
                                        @endif
                                 
                            <div class="item-sport">　   
                             　<h3>行うスポーツ</h3>
                                    @foreach($post->sports as $sport)
                                    <p class='sport'>{{ $sport->sport_name }}</p>
                                        
                            </div>            
                                    @endforeach
                             　
                            <div class="item-place">　
                             　<h3>主な活動エリア</h3>
                            　 <p class='place'>{{ $post->place }}</p>    
                            </div>    
                                
                            <div class="item-activity">    
                             　<h3>活動詳細</h3>
                             　<p>{{ $post->activity }}</p> 
                            </div>
                            
                            
                            <div class="item-condition"> 　
                             　<h3>募集条件</h3>
                             　<p class='condition'>{{ $post->condition }}</p>
                            </div>
                    
                            <a href='/users/{{$post->user_id}}'>{{ $post->user->name }}</a>
                    </div>
                  </article>     
                       
                       <aside>
                           <div class="aside-grid">
                                
                                @foreach ($posts as $post)
                                    <div class='post'>
                                        
                                         <a href="/posts/{{ $post->id }}"><h2 class='aside-title'>{{ $post->clubname }}</h2></a>
                                        <!--画像処理-->
                                         @if ($post->image_path)
                                         <!-- 画像を表示 -->
                                        
                                       <img src="{{ $post->image_path }}"class="aside-image">
                                      
                                        @endif
                                        
                                        <div class="content-first">
                                            <h3>行うスポーツ</h3>
                                            @foreach($post->sports as $sport)
                                            <p class='sport'>{{ $sport->sport_name }}</p>
                                        
                                            @endforeach
                                         </div>   
                                        
                                        <h3>主な活動エリア</h3>
                                        <p class='place'>{{ $post->place }}</p>
                                        
                                        <h3>活動詳細</h3>
                                        <p class='activity'>{{ $post->activity }}</p>
                                        
                                        <h3>募集条件</h3>
                                        <p class='condition'>{{ $post->condition }}</p>
                                        
                                        
                                    </div>
                                    
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