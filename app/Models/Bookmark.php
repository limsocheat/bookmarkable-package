<?php

namespace Packages\Bookmarkable\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Packages\Bookmarkable\Database\Factories\BookmarkFactory;

class Bookmark extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'user_type',
        'bookmarkable_id',
        'bookmarkable_type',
    ];

    protected static function newFactory(): BookmarkFactory
    {
        return BookmarkFactory::new();
    }
}
