<?php

//routing default
Route::get('/', function () {
    return view('master');
});

Route::get ('/','webcontroller@home');
Route::get ('/profile','webcontroller@profile');
Route::get ('/kontak','webcontroller@kontak');