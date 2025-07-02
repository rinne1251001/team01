<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;


// resources/views/selecsionsのルート
Route::view('/', 'selections/start');
Route::get('/chick', function () {
    return view('selections.yellow1', [
        'image' => 'yellow1.png'
    ]);
});
Route::get('/chicken', function () {
    return view('selections.yellow2', [
        'image' => 'yellow2.png'
    ]);
});
Route::get('/tadpole', function () {
    return view('selections.green1', [
        'image' => 'green1.png'
    ]);
});
Route::get('/frog', function () {
    return view('selections.green2', [
        'image' => 'green2.png'
    ]);
});
Route::get('/boarlest', function () {
    return view('selections.brown1', [
        'image' => 'brown1.png'
    ]);
});
Route::get('/boar', function () {
    return view('selections.brown2', [
        'image' => 'brown2.png'
    ]);
});



//着せ替えできたらいいな
Route::view('/dressup', 'dressup');

// resources/views/collectionsのルート
Route::get('/collections', [CollectionController::class, 'index'])->name('collections.index');
Route::get('/collections/create', [CollectionController::class, 'create'])->name('collections.create');
Route::post('/collections', [CollectionController::class, 'store'])->name('collections.store');
Route::get('/collections/{collection}', [CollectionController::class, 'show'])->name('collections.show');
