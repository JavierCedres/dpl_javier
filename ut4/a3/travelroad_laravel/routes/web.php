<?php

// https://laravel.com/api/6.x/Illuminate/Support/Facades/DB.html
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
  return view('travelroad');
})->name('travelroad');

Route::get('/wished', function() {
  $wished = DB::select('select * from places where visited = false');

  return view('wished', ['wished' => $wished]);
})->name('wished');

Route::get('/visited', function() {
  $visited = DB::select('select * from places where visited = true');

  return view('visited', ['visited' => $visited]);
})->name('visited');
