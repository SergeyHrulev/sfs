<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;


class Article extends Model
{
    public function userId(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function scopeLatest($query){
        return $query->orderBy('created_at', 'desc');
    }

    public function getArticle($slug){
        return $this->where('slug', $slug)->get();
    }

    public function commentId(){
        return $this->hasMany(Comment::class);
    }
}
