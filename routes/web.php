<?php
/*
|--------------------------------------------------------------------------
| Web Routes


*/

Route::get('/','eventscontroller@index')->name('home');
Route::resource('events','eventscontroller');
