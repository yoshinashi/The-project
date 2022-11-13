<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'login_id', 'send_id','receive_id', 'comment',
    ];

    protected $guarded = [
        'create_at', 'update_at'
    ];
    
    public function user()
{
    return $this->belongsTo(User::class);
}
}
