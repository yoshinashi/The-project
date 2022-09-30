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
        
       <form action="/plays" method="POST">
            @csrf
            <div class="name">
                <h2>名前</h2>
                <input type="text" name="profile[name]" placeholder="名前"/>
            </div>
            
            
            
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
            
            <div class="sport">
             
               <h2>経験・興味のあるスポーツ</h2>
               <label><input type="checkbox" name="profile[sport]"value="サッカー">サッカー</label>
               <label><input type="checkbox" name="profile[sport]"value="野球">野球</label>
               <label><input type="checkbox" name="profile[sport]"value="バスケットボール">バスケットボール</label>
             
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
            <a href="/users">戻る</a>
        </div>
        
        
        
        
    </body>
</html>