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
    <body class="edit-body">
        <div class="edit-top-contents">
            <h1 class="edit-title">投稿を編集する</h1>
        </div> 
    <div class="edit-club">
        <form action="/posts/{{$post->id}}" enctype="multipart/form-data" method="POST">
          @csrf
            @method('PUT')
            <div class="edit-container">
               
                     <div class="edit-item-clubname">
                            <h2 class="edit-subtitle">サークル名</h2>
                            
                            <textarea name="post[clubname]"  placeholder="活動詳細の記入（14文字まで）"class="edit-textarea"><?php
                                echo $post->clubname
                                ?></textarea>
                        <p class="title__error" style="color:red">{{ $errors->first('post.clubname') }}</p>
                     </div>
            
            
                    <div class="edit-item-sport">
                        <h2 class="edit-subtitle">行うスポーツ</h2>
            
                           @foreach($sports as $sport)
            
                                <label class="edit-check">
                                    {{-- valueを'$subjectのid'に、nameを'配列名[]'に --}}
                                    <input type="checkbox" value="{{ $sport->id }}" name="sports_array[]" {{ in_array($sport->id, $selectedSport) ? "checked" : "" }} class="check">
                                        {{$sport->sport_name}}
                                    </input>
                                </label>
                        
                            @endforeach   
                    </div>    
            
            
                        <div class="edit-item-place">
                            <h2 class="edit-subtitle">活動場所</h2>
                            <select name="post[place]" value="post[place]" class="edit-place">
                                <option value="">選択してください</option>
                                
                                @foreach ($places as $place)
                                    <option value="{{$place}}" {{$post->place == $place ? "selected" :"" }}>{{$place}}</option>
                                @endforeach
                            </select>
                        </div>    
            
                        <div class="edit-item-activity">
                            <h2 class="edit-subtitle">活動詳細</h2>
                            <textarea name="post[activity]"   placeholder="活動詳細の記入"class="edit-textarea"><?php
                            echo $post->activity 
                            ?></textarea>
                            <p class="title__error" style="color:red">{{ $errors->first('post.activity') }}</p>
                        </div>   
          
                       <div class="edit-item-condition">
                            <h2 class="edit-subtitle">募集条件</h2>
                            <textarea name="post[condition]"   placeholder="募集条件の記入"class="edit-textarea"><?php
                            echo $post->condition
                            ?></textarea>
                            <p class="title__error" style="color:red">{{ $errors->first('post.condition') }}</p>
                      </div>   
          
                        <div class="edit-item-image">
                          <h2 class="edit-subtitle">投稿画像の編集</h2>
                          <input type="file" name="image" class="edit-input-image">
                          <p class="title__error" style="color:red">{{ $errors->first('image') }}</p>
                        </div>


                        <div class="edit-item-insta">
    
                            <h2 class="edit-subtitle">インスタのアカウントID</h2>
                            <textarea name="post[insta]" placeholder="IDの記入"class="edit-textarea"><?php
                                echo $post->insta
                                ?></textarea>
                    　　</div>   
               
                        <div class="edit-item-input">
                            <input type="submit" value="投稿を編集する" onclick="return isCheck()">
                        </div>
            </div>
        
        </form>
    
      
        
        
       <div class="footer">
            <a href="/hosts">戻る</a>
        </div>
        
        
        
        
    </body>
</html>