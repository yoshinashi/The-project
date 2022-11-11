<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/user.css') }}">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>
    <body class="active-body">
        <div class="active-top-contents">
            <h1 class="active-title">活動を投稿する</h1>
        </div>
       <form action="/members"enctype="multipart/form-data"method="POST">
            @csrf
            <div class="active-container">
            
                <div class="active-item-activity">
                        <h2 class="active-subtitle">自分の活動を紹介する</h2>
                        <textarea name="active[activity]"placeholder="詳細の記入"class="active-textarea">{{ old('active.activity') }}</textarea>
                         <p class="title__error" style="color:red">{{ $errors->first('active.activity')}}</p>
                </div>
                
                
                <div class="active-item-image">
                    <h2 class="active-subtitle">活動写真の投稿</h2>
                    <input type="file" name="image_active" class="active-input-image">
                    <p class="title__error" style="color:red">{{ $errors->first('image_active')}}</p>
                </div> 
                
                <div class="active-item-save">    
                    <input type="submit" value="save"/>
                </div>    
            </div>    
        </form>
        
        
         
            <div class="footer">
                <a href="/users" class="back-user">[投稿をやめる]</a>
            </div>
    
            
    </body>
</html>