<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>プロフィールを登録する</h1>
        
       <form action="/keeps" enctype="multipart/form-data"  method="POST">
            @csrf
            
            <div class="name">
                <h2>名前</h2>
                <input type="text" name="profile[name]" placeholder="ニックネームも可"/>
            </div>
            
             <h2>アイコンの設定</h2>
            <input type="file" name="image_name">
            
            <div class="sex">
                <h2>性別</h2>
                
                 <input type="radio" id="contactChoice1"
                   name="profile[sex]" value="男性">
                 <label for="contactChoice1">男性</label>

                 <input type="radio" id="contactChoice2"
                   name="profile[sex]" value="女性">
                 <label for="contactChoice2">女性</label>

                 <input type="radio" id="contactChoice3"
                    name="profile[sex]"value="指定しない" >
                 <label for="contactChoice3">指定しない</label>
  
            </div>   
            
          <div class="age"> 
            <h2>年齢層</h2>
             <select name="profile[birthday]">
　　　　　　　　<option value="">選択してください</option>
　　　　　　　　<option value="20歳未満">20歳未満</option>
　　　　　　　　<option value="20-29歳">20-29歳</option>
　　　　　　　　<option value="30-39歳">30-39歳</option>
　　　　　　　　<option value="40-49歳">40-49歳</option>
　　　　　　　　<option value="50-59歳">50-59歳</option>
　　　　　　　　<option value="60歳以上">60歳以上</option>
　　　　　　 </select>
　　　　　</div>
　　　　　　
            
            <div class="sport">
             
               <h2>経験・興味のあるスポーツ</h2>
               <textarea name="profile[sport]" placeholder="経験年数などの記載"></textarea>
            </div>
            
            
    　<div class="place">
            <h2>住んでいる地域</h2>
            <select name="profile[place]">
　　　　　　　　<option value="">選択してください</option>
　　　　　　　　<option value="東京">東京</option>
　　　　　　　　<option value="神奈川">神奈川</option>
　　　　　　　　<option value="埼玉">埼玉</option>
　　　　　　　　<option value="茨城">茨城</option>
　　　　　　　　<option value="栃木">栃木</option>
　　　　　　　　<option value="千葉">千葉</option>
　　　　　　　　<option value="群馬">群馬</option>
            </select>
        </div>    
        
        <div class="profile">
                <h2>プロフィール</h2>
                <textarea name="profile[profile]" placeholder="詳細の記入"></textarea>
        </div>
            
            <input type="submit" value="keep"/>
        </form>
        
        
       <div class="footer">
            <a href="/indexes">登録をやめる</a>
        </div>
        
        
        
        
    </body>
</html>