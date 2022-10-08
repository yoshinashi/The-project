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
        </div>

        <div class='posts'>
            
            @foreach ($actives as $active)
                <div class='post'>
                   

                    
                    <h3>活動詳細</h3>
                    <p class='name'>{{ $active->activity }}</p>
                    
                    
                    
                    <h3>活動写真</h3>
                     @if ($active->image_active)
                     <!-- 画像を表示 -->
                    
                   <img src="{{ $active->image_active}}">
                  
                    @endif
                </div>
                
                <div class="edit">
                   <p> [<a href="/users/{{ $active->id }}/edit">活動内容を修正する</a>]</p>
                </div>    
                
                <form action="/users/{{ $active->id }}" id="form_{{ $active->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $active->id }})">この投稿を消去する</button> 
                </form>
                
            @endforeach
        </div>
        

        
         
        
         <div class="footer">
            <a href="/indexes">戻る</a>
        </div>
        
        
        <script>
            function deletePost(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>