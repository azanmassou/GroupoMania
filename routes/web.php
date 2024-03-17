<?php

use App\Http\Controllers\ArtistesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RepresentationsController;
use App\Http\Controllers\SallesController;
use App\Http\Controllers\SpectaclesController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UsersController;
use App\Models\User;
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
    return view('page');
});

Route::get('/dashbord', function () {
    return view('dashbord');
});


// Route Auth
Route::get('/connexion', [UsersController::class, 'connexion']);
Route::get('/inscription', [UsersController::class, 'inscription']);


// Routes Contact 

// Route::get('/contact', [ClientsController::class, 'index']);
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Routes Tickets
Route::prefix('/tickets')->controller(TicketsController::class)->group(function () {
    Route::get('/','index')->name('tickets.index');
    Route::get('/create','create')->name('tickets.create');
    Route::post('/', 'store')->name('tickets.store');
    Route::get('/{ticket}','show')->name('tickets.show');
    Route::get('/{ticket}/edit','edit')->name('tickets.edit');
    Route::patch('/{ticket}','update')->name('tickets.update');
    Route::delete('/{ticket}','destroy')->name('tickets.destroy');
});
// Routes Spectacles
Route::prefix('/spectacles')->controller(SpectaclesController::class)->group(function () {
    Route::get('/','index')->name('spectacles.index');
    Route::get('/create','create')->name('spectacles.create');
    Route::post('/', 'store')->name('spectacles.store');
    Route::get('/{spectacle}','show')->name('spectacles.show');
    Route::get('/{spectacle}/edit','edit')->name('spectacles.edit');
    Route::patch('/{spectacle}','update')->name('spectacles.update');
    Route::delete('/{spectacle}','destroy')->name('spectacles.destroy');
});

// Routes Artistes
Route::prefix('/artistes')->controller(ArtistesController::class)->group(function () {
    Route::get('/','index')->name('artistes.index');
    Route::get('/create','create')->name('artistes.create');
    Route::post('/', 'store')->name('artistes.store');
    Route::get('/{artiste}','show')->name('artistes.show');
    Route::get('/{artiste}/edit','edit')->name('artistes.edit');
    Route::patch('/{artiste}','update')->name('artistes.update');
    Route::delete('/{artiste}','destroy')->name('artistes.destroy');
});

// Routes Representations
Route::prefix('/representations')->controller(RepresentationsController::class)->group(function () {
    Route::get('/','index')->name('representations.index');
    Route::get('/create','create')->name('representations.create');
    Route::post('/', 'store')->name('representations.store');
    Route::get('/{representation}','show')->name('representations.show');
    Route::get('/{representation}/edit','edit')->name('representations.edit');
    Route::patch('/{representation}','update')->name('representations.update');
    Route::delete('/{representation}','destroy')->name('representations.destroy');
});

// Routes Salles
Route::prefix('/salles')->controller(SallesController::class)->group(function () {
    Route::get('/','index')->name('salles.index');
    Route::get('/create','create')->name('salles.create');
    Route::post('/', 'store')->name('salles.store');
    Route::get('/{salle}','show')->name('salles.show');
    Route::get('/{salle}/edit','edit')->name('salles.edit');
    Route::patch('/{salle}','update')->name('salles.update');
    Route::delete('/{salle}','destroy')->name('salles.destroy');
});

// Routes Clients
Route::prefix('/clients')->controller(ClientsController::class)->group(function () {
    Route::get('/','index')->name('clients.index');
    Route::get('/create','create')->name('clients.create');
    Route::post('/', 'store')->name('clients.store');
    Route::get('/{client}','show')->name('clients.show');
    Route::get('/{client}/edit','edit')->name('clients.edit');
    Route::patch('/{client}','update')->name('clients.update');
    Route::delete('/{client}','destroy')->name('clients.destroy');
});

// Route Users
Route::prefix('/users')->controller(UsersController::class)->group(function () {
    Route::get('/','index')->name('users.index');
    Route::get('/create','create')->name('users.create');
    Route::post('/', 'store')->name('users.store');
    Route::get('/{user}','show')->name('users.show');
    Route::get('/{user}/edit','edit')->name('users.edit');
    Route::patch('/{user}','update')->name('users.update');
    Route::delete('/{user}','destroy')->name('users.destroy');
});

// Route::resource('clients', 'ClientsController');


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