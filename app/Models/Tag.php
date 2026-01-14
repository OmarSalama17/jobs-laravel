<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tag extends Model
{
    //
    protected $table = 'tag';
    protected $fillable = ['title'];
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
