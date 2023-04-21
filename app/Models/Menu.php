<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'url',
        'class',
        'icon',
        'color',
        'page_id',
    ];

    public function page(): HasOne
    {
        return $this->hasOne(Page::class, 'id', 'page_id');
    }
}
