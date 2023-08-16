<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/',[PostController::class, 'index']);   index with postgresdb and display 
Route::get('/slug/{id}',[PostController::class, 'show']);

Route::get('/', function(){
    return view ('posts');
});



Route::get('posts/{post}', function ($slug) {
$path = __DIR__."/../resources/posts/{$slug}.html";

if (! file_exists($path)){
    return view ('/');
}
$post = file_get_contents($path);
 
 
    return view ('post', [
        'post' => $post
    ]);
});

