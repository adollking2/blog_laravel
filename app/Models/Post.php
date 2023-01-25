<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // public static function Semua(){
    //     return collect(self::$blog_post);
    // }
    // public static function cari($slug){
    //     $posts = static::Semua();
    //     return $posts->firstWhere('slug', $slug);
    // }
}
