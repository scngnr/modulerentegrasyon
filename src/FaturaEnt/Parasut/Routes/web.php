<?php


use Illuminate\Support\Facades\Route;
use Automattic\WooCommerce\Client;


Route::get('cat/list', [Scngnr\Mdent\FaturaEnt\Parasut\Http\Controllers\Category::class, 'index'] );
Route::get('cat/create', [Scngnr\Mdent\FaturaEnt\Parasut\Http\Controllers\Category::class, 'create'] );
Route::get('cat/info/{id}', [Scngnr\Mdent\FaturaEnt\Parasut\Http\Controllers\Category::class, 'info'] );

Route::get('product/list', [Scngnr\Mdent\FaturaEnt\Parasut\Http\Controllers\product::class, 'index'] );

Route::get('product/efatura', [Scngnr\Mdent\FaturaEnt\Parasut\Http\Controllers\Efatura::class, 'create'] );
