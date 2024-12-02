<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $table = 'replies';
    protected $fillable = ['comment_id', 'user_id', 'content'];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }

    public function comment()
    {
        return $this->belongsTo(comment::class, 'comment_id');
    }

}
