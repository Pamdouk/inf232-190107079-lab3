<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\App;

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
Route::get('/blog/index', [BlogController::class, 'index']);

Route::get('/blog/create', function(){
    return view('blog.create');
});

Route::post('/blog/create', [BlogController::class, 'store'])->name('add-blog');

Route::get('/post/{id}', [BlogController::class, 'get_post']);

Route::get('home/{lang}', function ($lang){
App::setlocale($lang);
return view('home');
});

Route::get('about/{lang}', function ($lang){
    App::setlocale($lang);
    return view('about');
    });

    Route::get('contacts/{lang}', function ($lang){
        App::setlocale($lang);
        return view('contacts');
        });


