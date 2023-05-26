<?php

//use Illuminate\Support\Facades\Request;
use App\Http\Controllers\WelcomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data=['name'=>'Darwin'];
    return view('welcome', ['mydata' => $data]);
});

Route::get('/home',[WelcomeController::class, 'homePage'])->name('Home');

Route::get('/',function()
{
    return view('auth.home');   
})->name('auth-home');

Route::group(['prefix' => '/admin'], function(){

    // Route::get('home', function(){
    //     return view('auth.home');
    // })->name('auth-home');
    
    Route::get('login', function () {
        return view('auth.login');
    })->name('auth-login');
    
    Route::get('register', function () {
        return view('auth.register');
    })->name('auth-reg');
    //Helper
    // Route::post('/login', function () {
    //     print_r(request()->all());
    // });
    
    //dependency injection 
    Route::post('/login', function (Request $request) {   
        //ddd(request()->all());
        dd($request->all());
        return "hello word";
    });
    
    
    Route::get('/reset-password', function(){
        return view('auth.reset');
    })->name('reset');
    

});



