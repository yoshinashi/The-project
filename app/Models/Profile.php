<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'name',
    'profile',
    'sex',
    'image_name',
    'birthday',
    'sport',
    'place',
];

public function users(){
    //生徒は多数の科目を履修。
    return $this->belongsTo(User::class);

}
}
