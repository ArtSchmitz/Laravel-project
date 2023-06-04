<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});

Route::get('/produtos/{id}', function () {
    return view('product', ['id' => $id]);
});