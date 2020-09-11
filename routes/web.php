<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Uocnv\TextTranslate\Controllers',
    'middleware' => ['web'],
    'prefix' => 'text-translate',
], function(){
    Route::get('/translate', 'TranslateController@getView')->name('translate.get');
});