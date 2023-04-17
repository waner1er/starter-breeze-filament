<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'thumbnail',
        'thumbnail_alt',
        'excerpt',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'menu_id',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function menu(): HasOne
    {
        return $this->hasOne(Menu::class, 'id', 'menu_id');
    }
}
