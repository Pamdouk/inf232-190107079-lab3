<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

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

Route::get('/home', function () {
    return view('home');
})-> name("Home");
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/post/create', function () {
    DB::table('post')->insert([
     'title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit est veritatis quibusdam sequi fuga nam accusamus hic',
     'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum consequuntur facilis, quos soluta ipsum reprehenderit eos, ratione eum aliquid provident! Voluptatem suscipit commodi unde fuga aliquid vero similique officiis?'
    ]);
});
Route::get('/post', function () {
    $post = post::find(1);
    return $post;
});
