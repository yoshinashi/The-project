<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'clubname',
    'activity',
    'image_path',
    'sport',
    'place',
    'condition',
    'insta',
    'user_id'
    ];
    
    public function sports(){
    //生徒は多数の科目を履修。
    return $this->belongsToMany(Sport::class);
}
public function user()
{
    return $this->belongsTo(User::class);
}
}


