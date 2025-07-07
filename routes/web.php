<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CollectionController;


// resources/views/selecsionsのルート
Route::view('/', 'selections/start');
Route::get('/chick', function () {
    return view('selections.yellow1', [
        'image' => 'images/yellow1.png'
    ]);
});
Route::get('/chicken', function () {
    return view('selections.yellow2', [
        'image' => 'images/yellow2.png'
    ]);
});
Route::get('/egg', function () {
    return view('selections.yellow3', [
        'image' => 'images/yellow3.png'
    ]);});
Route::get('/fox', function () {
    return view('selections.yellow4', [
        'image' => 'images/yellow5.png'
]);});
Route::get('/tadpole', function () {
    return view('selections.green1', [
        'image' => 'images/green1.png'
    ]);
});
Route::get('/frog', function () {
    return view('selections.green2', [
        'image' => 'images/green2.png'
    ]);
});
Route::get('/snake', function () {
    return view('selections.green3', [
        'image' => 'images/green3.png'
    ]);
});
Route::get('/amphisbaena', function () {
    return view('selections.green4', [
        'image' => 'images/green4.png'
    ]);
});
Route::get('/yamatanoorochi', function () {
    return view('selections.green5', [
        'image' => 'images/green5.png'
    ]);
});
Route::get('/boarlest', function () {
    return view('selections.brown1', [
        'image' => 'images/brown1.png'
    ]);
});
Route::get('/boar', function () {
    return view('selections.brown2', [
        'image' => 'images/brown2.png'
    ]);
});
Route::get('/bear', function () {
    return view('selections.brown3', [
        'image' => 'images/brown3.png'
    ]);
});
Route::get('/raccondog', function () {
    return view('selections.brown4', [
        'image' => 'images/brown4.png'
    ]);
});
Route::get('/brownegg', function () {
    return view('selections.orange1', [
        'image' => 'images/orange1.png'
    ]);
});
Route::get('/boiledegg', function () {
    return view('selections.orange2', [
        'image' => 'images/orange2.png'
    ]);
});
Route::get('/omeletrice', function () {
    return view('selections.orange3', [
        'image' => 'images/orange3.png'
    ]);
});
Route::get('/skeweredchicken', function () {
    return view('selections.orange4', [
        'image' => 'images/orange4.png'
    ]);
});
Route::get('/misterious', function () {
    return view('selections.rainbow1', [
        'image' => 'images/rainbow1.png'
    ]);
});
Route::get('/dokuchu', function () {
    return view('selections.rainbow2', [
        'image' => 'images/rainbow2.gif'
    ]);
});
Route::get('/babydragon', function () {
    return view('selections.blue1', [
        'image' => 'images/blue1.png'
    ]);
});
Route::get('/dragon', function () {
    return view('selections.blue2', [
        'image' => 'images/blue2.png'
    ]);
});
Route::get('/rabbit', function () {
    return view('selections.white1', [
        'image' => 'images/white1.png'
    ]);
});
Route::get('/ryu', function () {
    return view('selections.gold1', [
        'image' => 'images/gold1.png'
    ]);
});
Route::get('/dog', function () {
    return view('selections.yellow5', [
        'image' => 'yellow5.png'
    ]);
});


//着せ替え用のルート
Route::get('/dressup', function (Request $request) {
    $image = $request->query('image', 'images/yellow1.png');
    return view('dressup', compact('image'));
})->name('dressup');

// resources/views/collectionsのルート
Route::get('/collections', [CollectionController::class, 'index'])->name('collections.index');
Route::get('/collections/create', [CollectionController::class, 'create'])->name('collections.create');
Route::post('/collections', [CollectionController::class, 'store'])->name('collections.store');
Route::get('/collections/{collection}', [CollectionController::class, 'show'])->name('collections.show');
Route::get('/collections/{collection}/edit', [CollectionController::class, 'edit'])->name('collections.edit');
Route::patch('/collections/{collection}', [CollectionController::class, 'update'])->name('collections.update');
Route::delete('/collections/{collection}', [CollectionController::class, 'destroy'])->name('collections.destroy');



