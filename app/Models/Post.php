<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $fillable = ['title', 'excerpt', 'body'];
    // public static function Semua(){
    //     return collect(self::$blog_post);
    // }
    // public static function cari($slug){
    //     $posts = static::Semua();
    //     return $posts->firstWhere('slug', $slug);
    // }
    // Post::create([
    //     'title' => 'Ini adalah judul',
    //     'excerpt' => 'lorem impsum dolor sit amet',
    //     'body' => "ini adalah sebuah body yang berada dalam blog laravel buatan saya yang 
    //     bernama muhammad azzam muizzulhaq saya seorang tech entusisast baik dalam dunia sysadmin cloud dan juha backend dev 
    //     skill saya laravel8,ci3,cloud infracture fundamental,expressjs,react,python<p>
    //     saya ingin berbagi ilmu yang saya miliki kepada kalian semua agar kalian bisa menjadi seorang developer yang handal dan sakti
    //     dah itu saja dahulu sepertinya ini cukup untuk saya tulis di blog ini</p> <p>terima kasih</p>
    //     "
    // ])


}

