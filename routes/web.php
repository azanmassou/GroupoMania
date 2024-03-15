<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SallesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Routes Generiques

Route::get('/', function () {
    return view('welcome');
});

// Routes Contact 

// Route::get('/contact', [ClientsController::class, 'index']);
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store']);


// Routes Salles
Route::get('/salles', [SallesController::class, 'index'])->name('salles.index');

// Routes Blog

// Route::prefix('/services')->group(function(){
//     Route::get('/', function (Request $request) {
//         return [
//             'name' => $request->input('name'),
//             'url' => $request->url(),
//             'article' => "Mon Premier Article",
//             'link' => \route('show', ['id' =>14 ,'slug' => 'Je-sjhdh-shh'])
//         ];
//     })->name('index');

//     Route::get('/{slug}-{id}', function (Request $request, $slug, $id) {
//         return [
//             // 'id'=> $id,
//             // 'slug' => $slug,
//             'url' => $request->url(),
//         ];
//     })->where(['id'=> '[0-9]+', 'slug'=>'[0-9a-z-AZ\-]+'])->name('show');


// });

Route::prefix('/clients')->controller(ClientsController::class)->group(function () {
    Route::get('/','index')->name('clients.index');
    Route::get('/create','create')->name('clients.create');
    Route::post('/', 'store')->name('clients.store');
    Route::get('/{client}','show')->name('clients.show');
    Route::get('/{client}/edit','edit')->name('clients.edit');
    Route::patch('/{client}','update')->name('clients.update');
    Route::delete('/{client}','destroy')->name('clients.destroy');
});

// Routes Clients
// Route::get('/clients', [ClientsController::class, 'index'])->name('clients.index');
// Route::get('/clients/create', [ClientsController::class, 'create']);
// Route::post('/clients', [ClientsController::class, 'store']);
// Route::get('/clients/{client}', [ClientsController::class, 'show']);
// Route::get('/clients/{client}/edit', [ClientsController::class, 'edit']);
// Route::patch('/clients/{client}', [ClientsController::class, 'update']);
// Route::delete('/clients/{client}', [ClientsController::class, 'destroy']);


// Route::resource('clients', 'ClientsController');
