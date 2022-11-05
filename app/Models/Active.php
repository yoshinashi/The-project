<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Active extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'activity',
    'image_active',
    'user_id'
];

public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function getPaginateByLimit(int $limit_count = 1)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}
