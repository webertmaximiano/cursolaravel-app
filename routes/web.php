<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App; //importar a classe App e seus metodos

use Illuminate\Support\Facades\Config; //importar para usar os metodos da Facades Config


Route::get('/', function () {
    $environment = App::environment(); // carrega a configuracao do ambiente test ou production
   // $timezone = Config::get('app.timezone'); // Revelando o fuso horário da aplicação
    //$locale = Config::get('app.locale'); // Descobrindo a localidade da aplicação
    //$locale1 = config('app.locale'); // Descobrindo a localidade da aplicação

    //dd( $locale1);
    return view('welcome',compact('environment'));
});
