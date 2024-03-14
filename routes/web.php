<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactController;
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
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);


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




// Routes Clients
Route::get('/clients', [ClientsController::class, 'index']);
Route::get('/clients/create', [ClientsController::class, 'create']);
Route::post('/clients', [ClientsController::class, 'store']);
Route::get('/clients/{client}', [ClientsController::class, 'show']);
Route::get('/clients/{client}/edit', [ClientsController::class, 'edit']);
Route::patch('/clients/{client}', [ClientsController::class, 'update']);
Route::delete('/clients/{client}', [ClientsController::class, 'destroy']);
// Route::resource('clients', 'ClientsController');




