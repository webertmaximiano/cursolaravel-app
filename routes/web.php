<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App; //carregar a classe App e seus metodos

Route::get('/', function () {
    $environment = App::environment();
    return view('welcome',compact('environment'));
});
