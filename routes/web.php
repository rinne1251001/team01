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
Route::get('/egg', function () {
    return view('selections.yellow3', [
        'image' => 'yellow3.png'
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
Route::get('/snake', function () {
    return view('selections.green3', [
        'image' => 'green3.png'
    ]);
});
Route::get('/amphisbaena', function () {
    return view('selections.green4', [
        'image' => 'green4.png'
    ]);
});
Route::get('/yamatanoorochi', function () {
    return view('selections.green5', [
        'image' => 'green5.png'
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
Route::get('/brownegg', function () {
    return view('selections.orange1', [
        'image' => 'orange1.png'
    ]);
});
Route::get('/boiledegg', function () {
    return view('selections.orange2', [
        'image' => 'orange2.png'
    ]);
});
Route::get('/omeletrice', function () {
    return view('selections.orange3', [
        'image' => 'orange3.png'
    ]);
});
Route::get('/misterious', function () {
    return view('selections.rainbow1', [
        'image' => 'rainbow1.png'
    ]);
});
Route::get('/babydragon', function () {
    return view('selections.blue1', [
        'image' => 'blue1.png'
    ]);
});
Route::get('/dragon', function () {
    return view('selections.blue2', [
        'image' => 'blue2.png'
    ]);
});
Route::get('/rabbit', function () {
    return view('selections.white1', [
        'image' => 'white1.png'
    ]);
});
Route::get('/ryu', function () {
    return view('selections.yellow4', [
        'image' => 'yellow4.png'
    ]);
});

//着せ替えできたらいいな
Route::view('/dressup', 'dressup');

// resources/views/collectionsのルート
Route::get('/collections', [CollectionController::class, 'index'])->name('collections.index');
Route::get('/collections/create', [CollectionController::class, 'create'])->name('collections.create');
Route::post('/collections', [CollectionController::class, 'store'])->name('collections.store');
Route::get('/collections/{collection}', [CollectionController::class, 'show'])->name('collections.show');
Route::get('/collections/{collection}/edit', [CollectionController::class, 'edit'])->name('collections.edit');
Route::patch('/collections/{collection}', [CollectionController::class, 'update'])->name('collections.update');
Route::delete('/collections/{collection}', [CollectionController::class, 'destroy'])->name('collections.destroy');



