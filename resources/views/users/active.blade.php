<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>活動を投稿する</h1>
        
       <form action="/members"enctype="multipart/form-data"method="POST">
            @csrf
            
                <div class="profile">
                        <h2>自分のアクティビティを紹介する</h2>
                        <textarea name="active[activity]" placeholder="詳細の記入">
                        </textarea>
                </div>
                
                 <h2>活動写真の投稿</h2>
                    <input type="file" name="image_active">
                    
                    <input type="submit" value="save"/>
        </form>
        
        
       <div class="footer">
            <a href="/users">投稿をやめる</a>
        </div>
        
        
        
        
    </body>
</html>