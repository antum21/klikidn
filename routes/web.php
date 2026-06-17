<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('klikidn');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/kaos', function () {
    return view('kaos');
});
Route::get('/kaos', function () {

    $colors = [
        [
            'name' => 'Putih',
            'hex' => '#ffffff',
            'image' => 'img/kaos/putih.png'
        ],
        [
            'name' => 'orange',
            'hex' => '#E64E12',
            'image' => 'img/kaos/orange.png'
        ],
        [
            'name' => 'Merah',
            'hex' => '#d62828',
            'image' => 'img/kaos/merah.png'
        ],
        [
            'name' => 'Lime',
            'hex' => '#b5c423',
            'image' => 'img/kaos/lime.png'
        ],
        [
            'name' => 'Kuning',
            'hex' => '#fcd929',
            'image' => 'img/kaos/kuning.png'
        ],
        [
            'name' => 'Army',
            'hex' => '#31411f',
            'image' => 'img/kaos/army.png'
        ],
        [
            'name' => 'Navy',
            'hex' => '#0f133B',
            'image' => 'img/kaos/navy.png'
        ]
    ];

    return view('kaos', compact('colors'));

});
Route::get('/pdh', function () {

    $colors = [
        [
            'name' => 'Putih',
            'hex' => '#ffffff',
            'image' => 'img/kaos/putih.png'
        ],
        [
            'name' => 'orange',
            'hex' => '#E64E12',
            'image' => 'img/kaos/orange.png'
        ],
        [
            'name' => 'Merah',
            'hex' => '#d62828',
            'image' => 'img/kaos/merah.png'
        ],
        [
            'name' => 'Lime',
            'hex' => '#b5c423',
            'image' => 'img/kaos/lime.png'
        ],
        [
            'name' => 'Kuning',
            'hex' => '#fcd929',
            'image' => 'img/kaos/kuning.png'
        ],
        [
            'name' => 'Army',
            'hex' => '#31411f',
            'image' => 'img/kaos/army.png'
        ],
        [
            'name' => 'Navy',
            'hex' => '#0f133B',
            'image' => 'img/kaos/navy.png'
        ]
    ];

    return view('pdh', compact('colors'));

});
Route::get('/rompi', function () {

    $colors = [
     
        [
            'name' => 'cream',
            'hex' => '#f8ffa8',
            'image' => 'img/rompi/cream.png'
        ],
        [
            'name' => 'Merah',
            'hex' => '#d62828',
            'image' => 'img/rompi/merah.png'
        ],
        [
            'name' => 'Navy',
            'hex' => '#1c005d',
            'image' => 'img/rompi/navy.png'
        ],
        [
            'name' => 'Army',
            'hex' => '#31411f',
            'image' => 'img/rompi/army.png'
        ],
        [
            'name' => 'hitam',
            'hex' => '#181818',
            'image' => 'img/rompi/hitam.png'
        ]
    ];

    return view('rompi', compact('colors'));

});