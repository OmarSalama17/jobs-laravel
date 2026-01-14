<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tag extends Model
{
    //
    abstract $fillable = ['title'];
    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}
