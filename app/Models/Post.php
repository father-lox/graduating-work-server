<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
}
