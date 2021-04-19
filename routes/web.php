<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    // return view('welcome');
    $links = \App\Models\Link::all();

    return view('welcome', ['links' => $links]);

});
Route::get('/dashboard', function() {
    return view('dashboard');
});


// testing for the first new route
Route::get('/test', function() {
    return view('test');
});

Route::get('/submit', function() {
    return view('submit');
});

Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

    $link = tap(new App\Models\Link($data))->save();

    return redirect('/');
});

Route::get('/login', function() {
    return view('/auth/login');
})->name('login');

Route::get('/register', function() {
    return view('/auth/register');
})->name('register');

Route::post('/register', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'password' => 'required|max:255',
        'remember_token' => 'max:255'
    ]);

    $link = tap(new App\Models\User($data))->save();

    return redirect('login');
});


Route::get('/verify', function() {
    return view('/auth/verify');
})->name('verify');

Route::post('/login', function (Request $request) {
    $data = $request->validate(

    );
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
