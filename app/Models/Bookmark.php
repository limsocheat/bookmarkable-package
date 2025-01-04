<?php

namespace Packages\Bookmarkable\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Bookmarkable\Database\Factories\BookmarkFactory;

class Bookmark extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): BookmarkFactory
    // {
    //     // return BookmarkFactory::new();
    // }
}
