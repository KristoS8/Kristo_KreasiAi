<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'title',
        'image',
        'deskripsi',
        'slug',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
