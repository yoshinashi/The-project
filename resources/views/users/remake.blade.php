<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    </head>
    <body>
        <div class="remake-contents">
            <h1 class="remake-title">プロフィール編集画面</h1>
            <form action="/profiles" enctype="multipart/form-data" method="POST">
                    　　　@csrf
                    　　　@method('PUT')
                    　　　
                        <div class="name">
                            <h2 class="remake-subtitle">名前</h2>
                            <input type="text" name="profile[name]"value="{{$profile->name}}" placeholder="名前" class="remake-name"/>
                        </div>
                        
                        <h2 class="remake-subtitle">アイコンの設定</h2>
                        <input type="file" name="image_name">
                                    
                                     
                                    
                        <div class="sex">
                             <h2 class="remake-subtitle">性別</h2>
                             
                                <div class="radio-box">              
                                    <input type="radio" id="contactChoice1"
                                        name="profile[sex]" value="男性"{{$profile->sex == "男性" ? "checked" :"" }}
                                        style="transform:scale(3.0);" class="radio-btn">
                                    <label for="contactChoice1" class="radio-name">男性</label>
                                
                                    <input type="radio" id="contactChoice2"
                                        name="profile[sex]" value="女性"{{$profile->sex == "女性" ? "checked" :"" }}
                                        style="transform:scale(3.0);" class="radio-btn">
                                   <label for="contactChoice2" class="radio-name">女性</label>
                                </div>  
                                
                        </div>   
                                    
                        <div class="age">
                            <h2 class="remake-subtitle">年齢</h2>
                                <select name="profile[age]" value="profile[age]" class="remake-age">
                                    <option value="">選択してください</option>
                                        
                                    @foreach ($ages as $age)
                                        <option value="{{$age}}" {{$profile->age == $age ? "selected" :"" }}>{{$age}}</option>
                                    @endforeach
                                </select>
                        </div>    
                        　　　　　　
                                    
                                    
                        <div class="place">
                            <h2 class="remake-subtitle">活動場所</h2>
                            <select name="profile[place]" value="profile[place]" class="remake-place">
                                    <option value="">選択してください</option>
                                        
                                        @foreach ($places as $place)
                                    <option value="{{$place}}" {{$profile->place == $place ? "selected" :"" }}>{{$place}}</option>
                                        @endforeach
                            </select>
                        </div>    
                                
                        <div class="sport">
                             
                             <h2 class="remake-subtitle">経験・興味のあるスポーツ</h2>
                                <textarea name="profile[sport]" placeholder="経験年数などの記載"><?php
                                echo $profile->sport
                                ?></textarea>
                        </div>
                                
                        <div class="profile">
                                <h2 class="remake-subtitle">私はこんな人です</h2>
                                <textarea name="profile[profile]" placeholder="詳細の記入"><?php
                                echo $profile->profile
                                ?></textarea>
                        </div>
                                    
                        <input type="submit" value="update">
                </form>
        </div>
      
        
        
       <div class="footer">
            <a href="/users">戻る</a>
        </div>
        
        
        
        
    </body>
</html>