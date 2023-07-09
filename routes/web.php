<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< Updated upstream
    
    $nome = 'Arthur';
    $idade = 19;
    $arr = [1,2,3,4,5];
    $nomes = ['Henrique', 'Gabriel', 'Marcos', 'Pedro', 'João'];

    return view('welcome', 
        [
            'nome' => $nome,
            'idade' => $idade,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view ('products', ['busca' => $busca]);
    
});

Route::get('/produtos_teste/{id?}', function ($id = null) {

    return view('product', ['id' => $id]);

=======
    echo 'Olá Mundo';
>>>>>>> Stashed changes
});