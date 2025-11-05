<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/documentation', function () {
    $docKey = 'default';
    $title = config("l5-swagger.documentations.{$docKey}.api.title", 'Bachelor Bari API Documentation');

    $urlsToDocs = [
        $title => url('/storage/api-docs/api-docs.json') // must match where file is
    ];

    return view('l5-swagger::index', [
        'documentation' => $docKey,
        'documentationTitle' => $title,
        'urlsToDocs' => $urlsToDocs,
        'useAbsolutePath' => true,
    ]);
});
