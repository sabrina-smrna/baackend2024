<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;

// Route get ini default dari api nya
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// route untuk mengatur jalannya suatu api, lalu ada GET ini adalah method untuk menampilkan data /users, lalu harus memanggil AnimalController untuk diproses datanya, karna ingin menampilkan harus memakai INDEX
Route::get('/users', [AnimalController::class, 'index']);

// route untuk mengatur jalannya suatu api, lalu ada POST ini adalah method untuk menyimoan data /users/store, lalu harus memanggil AnimalController untuk diproses datanya, karna ingin menampilkan harus memakai STORE, STORE ini ada di controller animal
Route::post('/users/store', [AnimalController::class, 'store']);



Route::post('/animals', function(){
    echo "menambahkan hewan baru";
});

Route::put('/animals/{id}', function($id){
    echo "Mengupdate data Id $id";
});

Route::delete('/animals{$id}', function($id){
    echo "Menghapus data hewan id $id";
});

Route::get('/animals', [AnimalController::class, 'index']);

Route::post('/animals', [AnimalController::class, 'store']);

Route::put('/animals/{id}', [AnimalController::class, 'update']);

Route::delete('/animals', [AnimalController::class, 'destroy']);

// membuat route students dengan method get
Route::get('/students', [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'store']);
Route::put('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);

