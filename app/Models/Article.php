<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['img','title','author','body','tags' ];
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class,'commentable');
    }
}
