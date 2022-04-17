<?php
use Illuminate\Support\Facades\Route;

 Route :: get('/',function(){
     return view('pages/home');
 })->name('home');

 Route::get('/about-us', function(){
     return view('pages/about');
 })->name('about');

//  autres possibilite
// Route::view('/','pages/home')->name('home');

//ou

//Route:: get('/',fn()=> view('pages/home'))->name('home');
