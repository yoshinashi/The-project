<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    </head>
    <body>
        <h1 class="create-title">サークルを作る</h1>
        
       
       <div class="create-club">
               <form action="/posts" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="clubname">
                        <h2 class="create-subtitle">サークル名</h2>
                        <input type="text" name="post[clubname]" placeholder="サークル名" class="create-name"/>
                    </div>
                    
                    
                    
                    
                    
                <div class="create-sport">
                    <h2 class="create-subtitle">行うスポーツ（複数選択可能）</h2>
                    
                       @foreach($sports as $sport)
        
                            <label>
                                {{-- valueを'$subjectのid'に、nameを'配列名[]'に --}}
                                <input type="checkbox" value="{{ $sport->id }}" name="sports_array[]">
                                    {{$sport->sport_name}}
                                </input>
                            </label>
                    
                        @endforeach   
                </div>    
                    
                 
                 
                 
              
                        <div class="create-place">                         
                            <h2>活動場所</h2>
                            <select name="post[place]"　value="post[place]" class="create-place">
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
                            
                         　 <div class="crearte-activity">
                                <h2 class="create-subtitle">活動詳細</h2>
                                <textarea name="post[activity]"  placeholder="活動詳細の記入"　class="create-activity"></textarea>
                        　　</div>   
                        　　
                        　　 <div class="create-condition">
                                <h2 class="create-subtitle">募集条件</h2>
                                <textarea name="post[condition]" placeholder="募集条件の記入"></textarea>
                        　　</div>   
                        　　
                        　　
                        　　
                            <!-- アップロードフォームの作成 -->
                            <h2 class="create-subtitle">画像を投稿する</h2>
                            <input type="file" name="image">
                             
                    
                  
                    
                    <input type="submit" value="サークルを作る"/>
                    
                    
                </form>
        </div>
        
       
        
        
       <div class="footer">
            <a href="/hosts">戻る</a>
        </div>
        
        
        
        
    </body>
</html>