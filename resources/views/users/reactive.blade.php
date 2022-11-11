<head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/user.css') }}">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>
    <body class="reactive-body">
        <div class="reactive-top-contents">
            <h1 class="reactive-title">活動を再投稿する</h1>
        </div>
       <form action="/users/{{$active->id}}"enctype="multipart/form-data"method="POST">
            @csrf
            @method('PUT')
            
            <div class="reactive-container">
                <div class="reactive-item-activity">
                    <h2 class="reactive-subtitle">自分のアクティビティを紹介する</h2>
                    <textarea name="active[activity]" placeholder="詳細の記入"class="reactive-textarea"><?php echo $active->activity ?></textarea>
                    <p class="title__error" style="color:red">{{ $errors->first('active_activity')}}</p>
                </div>
                
                
                <div class="reactive-item-image">
                 <h2 class="reactive-subtitle">活動写真の投稿</h2>
                    <input type="file" name="image_active"class="reactive-input-image">
                    <p class="title__error" style="color:red">{{ $errors->first('image_active')}}</p>
                </div>    
                <div class="reactive-item-repost">
                    <input type="submit" value="再投稿"/>
                </div>    
            </div>    
        </form>
        
        
       <div class="footer">
            <a href="/users"class="back-user">[再投稿をやめる]</a>
        </div>
        
        
        
        
    </body>
</html>