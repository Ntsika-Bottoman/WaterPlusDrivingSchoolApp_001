<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// - - - The Route to get the view "page" that is the actutal form - - - //
Route::get('/create', function() {
    return view('create');
});
// - - - The end of this piece of code that pulls the form - - - //

// - - - This is the code that make the Location "button" clickerable & visibly - - - //
Route::view('create', 'create')
->middleware(['auth', 'verified'])
->name('create');
// - - - The end of such code for location - - - //

// - - - This is the route for the POST method, we pass values through this route - - - //
Route::post('/create', function(){
    $article = new Article();
    $article->title = request('title');
    $article->title1 = request('title1');
    $article->title2 = request('title2');
    $article->title3 = request('title3');
    $article->title4 = request('title4');
    $article->body = request('body');
    $article->save();
    return redirect('/dashboard');
});
// - - - The end of the POST method routes that pass values to the DB - - - //

// - - - This is the code to manuevar the cart items and to remove them - - -//
Route::get('/movies-list', [MovieController::class, 'index'])->name('movies');
Route::get('/cart-list', [MovieController::class, 'movieCart'])->name('cart');
Route::post('add-to-cart', [MovieController::class, 'addMovieToCart'])->name('add-movie-to-shopping-cart');
Route::delete('/delete-cart-item', [MovieController::class, 'deleteItem'])->name('delete.cart.item');
// - - - The end of such code that relates to the cart - - - //