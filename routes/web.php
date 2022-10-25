<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;

Route::get('/myname', function(){
    return env('MY_NAME');
});

Route::get('/',[PagesController::class, 'index']);
Route::get('/about',[PagesController::class, 'about']);
Route::get('/posts',[PostsController::class, 'index']);

Route::resource('/foods', FoodsController::class);

Route::get('/products',[
    ProductController::class,
    'index'
])->name('products'); //ten thay cho route de su dung de dang hon vd <a href="{{ route('products') }}">link to products</a>

// Route::get('/products/{id}',[
//     ProductController::class,
//     'detail'
// ]);
// Route::get('/products/{productName}',[
//         ProductController::class,
//         'detail'
//     ]);
Route::get('/products/{id}/{productName}',[
    ProductController::class,
    'detail'
])->where([
    'productName'=>'[a-zA-Z0-9]+',
    'id'=>'[0-9]+'
]);

// Route::get('/admin', [
//     ProvisionServer::class,
//     'home'
// ]);