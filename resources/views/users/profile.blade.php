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
        <h1 class="profile-title">プロフィールを登録する</h1>
        <div class="profile-body">
            
            <div class="profile-contents">
                <form action="/keeps" enctype="multipart/form-data"  method="POST">
                    @csrf
                    <div class="profile-container">
                        <div class=profile-left>
                                <div class="profile-item-title">
                                    <h2 class="profile-subtitle">名前</h2>
                                    <input type="text" name="profile[name]" placeholder="ニックネームも可" class="profile-name"/>
                                </div>
                                
                                <div class="profile-item-sport">
                                 
                                   <h2 class="profile-subtitle">経験・興味のあるスポーツ</h2>
                                   <textarea name="profile[sport]" placeholder="経験年数などの記載"></textarea>
                                </div>
                            
                                <div class="profile-item-profile">
                                        <h2 class="profile-subtitle">自己紹介</h2>
                                        <textarea name="profile[profile]" placeholder="趣味や普段していること等"></textarea>
                                </div>
                        </div> 
                        
                        <div class="profile-right">
                                <div class="profile-item-image">
                                    <h2 class="profile-subtitle">アイコンの設定</h2>
                                    <input type="file" name="image_name">
                                </div>    
                                
                                <div class="profile-item-sex">
                                    <h2 class="profile-subtitle">性別</h2>
                                    
                                        <div class="radio-box">
                                             <input type="radio" id="contactChoice1"
                                               name="profile[sex]" value="男性"style="transform:scale(3.0);" class="radio-btn">
                                             <label for="contactChoice1"class="radio-name">男性</label>
                            
                                             <input type="radio" id="contactChoice2"
                                               name="profile[sex]" value="女性"style="transform:scale(3.0);" class="radio-btn">
                                             <label for="contactChoice2" class="radio-name">女性</label>
                                        </div>
                                </div>   
                                
                              <div class="profile-item-age"> 
                                <h2 class="profile-subtitle">年齢層</h2>
                                <select name="profile[age]" class="profile-age">
                    　　　　　　　　<option value="">選択してください</option>
                    　　　　　　　　<option value="20歳未満">20歳未満</option>
                    　　　　　　　　<option value="20-29歳">20-29歳</option>
                    　　　　　　　　<option value="30-39歳">30-39歳</option>
                    　　　　　　　　<option value="40-49歳">40-49歳</option>
                    　　　　　　　　<option value="50-59歳">50-59歳</option>
                    　　　　　　　　<option value="60歳以上">60歳以上</option>
                    　　　　　　 </select>
                    　　　　　</div>
                    　　　　　　
                        　<div class="profile-item-place">
                                <h2 class="profile-subtitle">住んでいる地域</h2>
                                <select name="profile[place]" class="profile-place">
                    　　　　　　　　<option value="">選択してください</option>
                    　　　　　　　　<option value="東京">東京</option>
                    　　　　　　　　<option value="神奈川">神奈川</option>
                    　　　　　　　　<option value="埼玉">埼玉</option>
                    　　　　　　　　<option value="茨城">茨城</option>
                    　　　　　　　　<option value="栃木">栃木</option>
                    　　　　　　　　<option value="千葉">千葉</option>
                    　　　　　　　　<option value="群馬">群馬</option>
                    　　　　　　　　<option value="その他の地域">その他の地域</option>
                                </select>
                            </div>    
                    
                            <div class="profile-item-keep">    
                                <input type="submit" value="keep"/>
                            </div> 
                        </div>    
                    </div>    
                 </form>
                </div> 
            </div>
        </div>
        
       <div class="footer">
            <a href="/users">登録をやめる</a>
        </div>
        
    </body>
</html>