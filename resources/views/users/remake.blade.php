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
        <h1 class="remake-title">プロフィール編集画面</h1>
        <div class="remake-body">
            <div class="remake-contents">
                <form action="/profiles" enctype="multipart/form-data" method="POST">
                            　　　@csrf
                            　　　@method('PUT')
                        <div class=remake-container>    　　　

                               <div class="remake-left">
                                    <div class="profile-item-title">
                                        <h2 class="profile-subtitle">名前</h2>

                                        <textarea name="profile[name]" placeholder="ニックネームも可（10文字以内）"class="profile-textarea"><?php
                                        echo $profile->profile
                                        ?>{{ old('profile.name') }}</textarea>
                                        <p class="title__error" style="color:red">{{ $errors->first('profile.name')}}</p>
                                    </div>
                                    

                                    <div class="remake-item-sport">
                                        <h2 class="remake-subtitle">経験・興味のあるスポーツ</h2>
                                        <textarea name="profile[sport]" placeholder="経験年数などの記載" class="remake-textarea"><?php
                                        echo $profile->sport
                                        ?></textarea>
                                        <p class="title__error" style="color:red">{{ $errors->first('profile.sport')}}</p>
                                    </div>
                                    
                                    <div class="remake-item-profile">
                                        <h2 class="remake-subtitle">自己紹介</h2>
                                        <textarea name="profile[profile]" placeholder="詳細の記入"class="remake-textarea"><?php
                                        echo $profile->profile
                                        ?></textarea>
                                        <p class="title__error" style="color:red">{{ $errors->first('profile.profile')}}</p>
                                    </div>
                                
                                </div>
                                  
                                
                                    <div class="remake-item-image">
                                        <h2 class="remake-subtitle">アイコンの設定</h2>
                                        <input type="file" name="image_name">
                                        <p class="title__error" style="color:red">{{ $errors->first('image_name') }}</p>
                                    </div>            
                                                 
                                                
                                    <div class="remake-item-sex">
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
                                                
                                    <div class="remake-item-age">
                                        <h2 class="remake-subtitle">年齢層</h2>
                                            <select name="profile[age]" value="profile[age]" class="remake-age">
                                                <option value="">選択してください</option>
                                                    
                                                @foreach ($ages as $age)
                                                    <option value="{{$age}}" {{$profile->age == $age ? "selected" :"" }}>{{$age}}</option>
                                                @endforeach
                                            </select>
                                    </div>    
                                    　　　　　　
                                                
                                                
                                    <div class="remake-item-place">
                                        <h2 class="remake-subtitle">住んでいる地域</h2>
                                        <select name="profile[place]" value="profile[place]" class="remake-place">
                                                <option value="">選択してください</option>
                                                    
                                                    @foreach ($places as $place)
                                                <option value="{{$place}}" {{$profile->place == $place ? "selected" :"" }}>{{$place}}</option>
                                                    @endforeach
                                        </select>
                                    </div>    

                                    
                                <div class=remake-item-update>            
                                    <input type="submit" value="update">
                                </div> 
                            </div>    
                        </div>    
                    </form>
                </div>
            </div>
        
        
       <div class="footer">
            <a href="/users">プロフィール編集をやめる</a>
        </div>
        
        
        
        
    </body>
</html>