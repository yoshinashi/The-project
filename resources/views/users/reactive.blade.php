<head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>活動登録</h1>
        
       <form action="/users/{{$active->id}}"enctype="multipart/form-data"method="POST">
            @csrf
            @method('PUT')
                <div class="profile">
                        <h2>自分のアクティビティを紹介する</h2>
                        <textarea name="active[activity]" placeholder="詳細の記入"></textarea>
                </div>
                
                 <h2>活動写真の投稿</h2>
                    <input type="file" name="image_active">
                    
                    <input type="submit" value="再投稿"/>
        </form>
        
        
       <div class="footer">
            <a href="/users">再投稿をやめる</a>
        </div>
        
        
        
        
    </body>
</html>