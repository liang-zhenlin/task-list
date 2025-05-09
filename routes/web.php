<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Main Page';
});

Route::get('/hallo', function () {
    return redirect('/hello');
});

Route::get('/hello', function() {
    return 'Hello';
})->name('hello');

Route::get('greet/{name}', function($name) {
    return 'Hello ' . $name . '!';
});
