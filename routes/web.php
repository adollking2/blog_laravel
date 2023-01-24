<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'name' => 'azzam',
        'email' => "hore@email.com",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});


Route::get('/blog', function () {
    
$blog_post =[
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
    return view('posts',[
        'title' => 'blog',
        'posts' => $blog_post
    ]);
});

// Halaman Single Post

Route::get('/post/{slug}', function($slug){
        
$blog_post =[
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

 foreach($blog_post as $post){
     if($post['slug'] === $slug){
         return view('post', [
             'title' => $post['title'],
             'post' => $post
         ]);
     }
 }
});