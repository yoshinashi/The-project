<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClubStand</title>
        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/post.css') }}">
        <script src="{{ asset('js/post.js') }}"></script>
    </head>
    <body>
        
         <h1 class="edit-title">編集画面</h1>
         
    <div class="edit-club">
        <form action="/posts/{{$post->id}}" enctype="multipart/form-data" method="POST">
           
                                @csrf
                                @method('PUT')
               
                             <div class="edit-clubname">
                                    <h2>サークル名</h2>
                                    
                                    <textarea name="post[clubname]"  placeholder="活動詳細の記入（14文字まで）"class="edit-clubname"><?php
                                        echo $post->clubname
                                        ?></textarea>
                                <p class="title__error" style="color:red">{{ $errors->first('post.clubname') }}</p>
                             </div>
            
            
                    <div class="edit-sport">
                        <h2 class="edit-subtitle">行うスポーツ</h2>
            
                           @foreach($sports as $sport)
            
                                <label>
                                    {{-- valueを'$subjectのid'に、nameを'配列名[]'に --}}
                                    <input type="checkbox" value="{{ $sport->id }}" name="sports_array[]" {{ in_array($sport->id, $selectedSport) ? "checked" : "" }} class="check">
                                        {{$sport->sport_name}}
                                    </input>
                                </label>
                        
                            @endforeach   
                    </div>    
            
            
                        <div class="place">
                            <h2 class="edit-subtitle">活動場所</h2>
                            <select name="post[place]" value="post[place]" class="edit-place">
                                <option value="">選択してください</option>
                                
                                @foreach ($places as $place)
                                    <option value="{{$place}}" {{$post->place == $place ? "selected" :"" }}>{{$place}}</option>
                                @endforeach
                            </select>
                            
                            
                        </div>    
            
                       <div class="edit-activity">
                            <h2 class="edit-subtitle">活動詳細</h2>
                            <textarea name="post[activity]"   placeholder="活動詳細の記入"><?php
                            echo $post->activity 
                            ?></textarea>
                            <p class="title__error" style="color:red">{{ $errors->first('post.activity') }}</p>
                      </div>   
          
                       <div class="edit-condition">
                            <h2 class="edit-subtitle">募集条件</h2>
                            <textarea name="post[condition]"   placeholder="募集条件の記入"><?php
                            echo $post->condition
                            ?></textarea>
                            <p class="title__error" style="color:red">{{ $errors->first('post.condition') }}</p>
                      </div>   
          
                    <div class="edit-image">
                      <h2 class="edit-subtitle">投稿画像の編集</h2>
                      <input type="file" name="image">
                      <p class="title__error" style="color:red">{{ $errors->first('image') }}</p>
                    </div>


                    <div class="edit-insta">

                        <h2 class="edit-subtitle">インスタのアカウントID</h2>
                        <textarea name="post[insta]" placeholder="IDの記入"><?php
                            echo $post->insta
                            ?></textarea>
                　　</div>   
               
            <input type="submit" value="投稿を編集する" onclick="return isCheck()">
        </form>
    </div>
      
        
        
       <div class="footer">
            <a href="/hosts">戻る</a>
        </div>
        
        
        
        
    </body>
</html>