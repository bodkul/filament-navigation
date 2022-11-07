<?php

namespace Bodkul\FilamentNavigation\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Navigation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'label',
        'items',
    ];

    protected $casts = [
        'items' => AsCollection::class,
    ];
}
