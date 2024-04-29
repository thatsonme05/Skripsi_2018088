<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardDataController;
use App\Http\Controllers\DashboardHandphoneController;
use App\Http\Controllers\DashboardNilaiController;
use App\Http\Controllers\DashboardHitungController;
use App\Http\Controllers\DashboardPerbandinganKriteriaController;



Route::get('/dashboard', function () {
    return view ('dashboard',[
        "tittle" => "Dashboard"

    ]);
});


Route::get('/about', function () {
    $abouts = [
        [
            "tittle" => "Sistem Pendukung Keputusan Pemilihan Handphone",
            "slug" => "sistemi-pendukung-keputusan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. 
            Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis 
            sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. 
            Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per 
            conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero."
        ]
    
        ];
    return view ('about', [
        "tittle" => "About",
        "about" => $abouts


    ]);
});

Route::get('/about/{slug}', function ($slug) {
    return view ('abouts', [

        "tittle" => "Sistem Pendukung Keputusan"

    ]);
});

Route::get('/data', function () {
    return view ('data');
});

Route::get('/handphone', function () {
    return view ('handphone');
});

Route::get('/nilai', function () {
    return view ('nilai');
});

Route::get('/bobot', function () {
    return view ('bobot');
});

Route::get('/perbandingan', function () {
    return view ('perbandingan');
});

Route::get('/hitung', function () {
    return view ('hitung');
});

Route::get('/login', [LoginController::class , 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class , 'authenticate']);
Route::post('/logout',[LoginController::class , 'logout']);


Route::get('/register', [RegisterController::class , 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class , 'store']);



Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/data', DashboardDataController ::class)
->middleware('auth');

Route::resource('/dashboard/handphone', DashboardHandphoneController ::class)
->middleware('auth');

Route::resource('dashboard/nilai', DashboardNilaiController:: class)
->middleware('auth');

Route::resource('dashboard/hitung', DashboardHitungController:: class)
->middleware('auth');

Route::resource('dashboard/perbandingan', DashboardPerbandinganKriteriaController:: class)
->middleware('auth');
Route::get('dashboard/perbandingan', [DashboardPerbandinganKriteriaController::class, 'index']);
Route::post('dashboard/perbandingan', [DashboardPerbandinganKriteriaController::class, 'store'])->name('perbandingan.store');