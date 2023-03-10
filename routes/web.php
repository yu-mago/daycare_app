<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;  //外部にあるPostControllerクラスをインポート。
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/messages', [MessageController::class, 'index']);   

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [MessageController::class, 'home']);
    Route::get('/messages', [MessageController::class, 'index']);
    Route::post('/messages/posts', [MessageController::class, 'store']);
    Route::get('/messages/posts', [MessageController::class, 'create']);
    Route::get('messages/posts/{message}', [MessageController::class ,'show']);
    Route::get('/messages/posts/{message}/edit', [MessageController::class, 'edit']);
    Route::put('/messages/posts/{message}', [MessageController::class, 'update']);
    Route::delete('messages/posts/{message}', [MessageController::class,'delete']);
    
//コントローラーを通じてviewに渡したい→PostControllerを呼び出し、indexメソッドを返す
//ここの表示部分がサイとのトップページとなる
});


require __DIR__.'/auth.php';
