<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::any('/', function () {
    $pagetype="index";
    return view('pages.index')->with(['pagetype'=>$pagetype]);
});

Route::any('/index', function () {
    $pagetype="index";
    return view('pages.index')->with(['pagetype'=>$pagetype]);
});


Route::any('/orders', function () {
    $pagetype="orders";
    return view('pages.orders')->with(['pagetype'=>$pagetype]);
});

Route::get('/categories_main', function () {
    $pagetype="categories_main";
    return view('pages.categories_main')->with(['pagetype'=>$pagetype]);
});

Route::any('/categories_attr', function () {
    $pagetype="categories_attr";
    return view('pages.categories_attr')->with(['pagetype'=>$pagetype]);
});

Route::any('/categories_prodlist', function () {
    $pagetype="categories_prodlist";
    return view('pages.categories_prodlist')->with(['pagetype'=>$pagetype]);
});

Route::any('/products_add', function () {
    $pagetype="products_add";
    return view('pages.products_add')->with(['pagetype'=>$pagetype]);
});

Route::any('/products_edit', function () {
    $pagetype="products_edit";
    return view('pages.products_edit')->with(['pagetype'=>$pagetype]);
});

Route::any('/products_main', function () {
    $pagetype="products_main";
    return view('pages.products_main')->with(['pagetype'=>$pagetype]);
});

Route::any('/banners_main', function () {
    $pagetype="banners_main";
    return view('pages.banners_main')->with(['pagetype'=>$pagetype]);
});

Route::any('/static_main', function () {
    $pagetype="static_main";
    return view('pages.static_main')->with(['pagetype'=>$pagetype]);
});



