<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
         <h1 class="title">編集画面</h1>
         
    <div class="content">
        <form action="/posts/{{$post->id}}" enctype="multipart/form-data" method="POST">
           
                                @csrf
                                @method('PUT')
               
                             <div class="clubname">
                                    <h2>サークル名</h2>
                                    <input type="text" name="post[clubname]" value="{{ $post->clubname }}" placeholder="サークル名"/>
                             </div>
            
            
            
                    <div class="sport">
                        <h2>行うスポーツ</h2>
            
                           @foreach($sports as $sport)
            
                                <label>
                                    {{-- valueを'$subjectのid'に、nameを'配列名[]'に --}}
                                    <input type="checkbox" value="{{ $sport->id }}" name="sports_array[]">
                                        {{$sport->sport_name}}
                                    </input>
                                </label>
                        
                            @endforeach   
                    </div>    
            
            
                        <div class="place">
                            <h2>活動場所</h2>
                            <select name="post[place]" value="post[place]">
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
            
                       <div class="activity">
                            <h2>活動詳細</h2>
                            <textarea name="post[activity]"   placeholder="活動詳細の記入"></textarea>
                      </div>   
          
                       <div class="condition">
                            <h2>募集条件</h2>
                            <textarea name="post[condition]"   placeholder="募集条件の記入"></textarea>
                      </div>   
          
          <h2>投稿画像の編集</h2>
          <input type="file" name="image">
               
              
               
            <input type="submit" value="update">
        </form>
    </div>
      
        
        
       <div class="footer">
            <a href="/hosts">戻る</a>
        </div>
        
        
        
        
    </body>
</html>