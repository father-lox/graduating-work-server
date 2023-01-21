<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author_comment',
        'author_id',
    ];

    protected function user() {
        return $this->hasOne(User::class, 'id', 'author_id');
    }
    
        /**
         * Get all of the comments for the Post
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function comments()
        {
            return $this->hasMany(Comment::class);
        }
}
