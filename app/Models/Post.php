<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    /**
     * @return void
     */
    public function user()
    {
        $this->belongsTo(User::class,'user_id','id');
    }
}
