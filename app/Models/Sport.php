<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;
    
    //投稿に対するリレーション
//生徒に対するリレーション
public function posts(){
    //1つの科目を多数の生徒が履修。
    return $this->belongsToMany(Post::class);
}
}
