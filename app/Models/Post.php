<?php

namespace App\Models;

class Post 
{
    static $blog_post =[
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Azzam',
            'body' => 'Lorem ipsum dolort consectetur adipisicing elit. Quisquam, quod.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Azzam2',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
    
        ]
        
     ];

    public static function Semua(){
        return collect(self::$blog_post);
    }
    public static function cari($slug){
        $posts = static::Semua();
        return $posts->firstWhere('slug', $slug);
    }

}
