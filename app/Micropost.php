<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content'];
    
    /**
     *  子の投稿を所有するユーザ。(Userモデルとの関係を定義)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function gain_favor()
    {
        return $this->belongsToMany(User::class, 'favorite', 'user_id', 'micropost_id')->withTimestamps();
    }
    
    public function loadRelationshipCounts()
    {
        $this->loadCount(['gain_favor']);
    }
}
