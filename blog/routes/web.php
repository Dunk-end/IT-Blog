<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/reg/', function () {
    return view('reg');
})->name('reg');

Route::get('/entrance/', function () {
    return view('entrance');
})->name('entrance');

Route::post(
    'contact/submit', [ContactController::class, 'submit']
)->name('contact-form');
Route::get(
    'contact/all', [ContactController::class, 'allData']
)->name('contact-data');

Route::get('/1', function() {
    return view('1');
})->name('1');

Route::get('/2', function() {
    return view('2');
})->name('2');

Route::get('/3', function() {
    return view('3');
})->name('3');

Route::get('/4', function() {
    return view('4');
})->name('4');

Route::get('/5', function() {
    return view('5');
})->name('5');

Route::get('/6', function() {
    return view('6');
})->name('6');

Route::get('/7', function() {
    return view('7');
})->name('7');

Route::get('/8', function() {
    return view('8');
})->name('8');

Route::get('/9', function() {
    return view('9');
})->name('9');

Route::get('/10', function() {
    return view('10');
})->name('10');
