<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) 
    {
        $series = [
            'Sons Of Anarchy',
            'Breaking bad',
            'Manifest'
        ];

        return view('series.index', [
            'series' => $series
        ]);
    }
}
