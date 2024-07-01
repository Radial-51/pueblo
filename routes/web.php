<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonioController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\EmployeeRatingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');


// Rutas para los servicios
Route::get('/Disponibles', [ServiceController::class, 'availableServices'])->name('services.available');

// Rutas para los communities
Route::get('/Comunidad', [CommunityController::class, 'availableCommunity'])->name('community.available');

// Rutas para el background
Route::get('/Acerca', [WelcomeController::class, 'Acerca'])->name('about');

// Rutas para el contacto
Route::get('/Contacto', [WelcomeController::class, 'Contacto'])->name('contacto');

//Rutas para testimonios 
Route::get('/Testimonios', [WelcomeController::class, 'Testimonios'])->name('testimonios');

// Ruta para la vista de usuarios
Route::get('/usuarios', function () {
    return view('usuarios');
})->name('usuarios')->middleware('auth');

// // Ruta para la vista de admin
// Route::get('/admin', function () {
//     return view('home');
// })->name('admin')->middleware('auth.admin');

// Rutas para las ofertas
Route::get('/Ofertas', [ServiceController::class, 'Offer'])->name('offer');

// Rutas CRUD generadas por ibex/crud-generator
Route::resource('users', UserController::class)->middleware('can:users.index');

// Rutas CRUD generadas por ibex/crud-generator
Route::resource('employee-ratings', EmployeeRatingController::class);

// Rutas CRUD generadas por ibex/crud-generator
Route::resource('testimonios', TestimonioController::class)->middleware('can:testimonios.index');

// Rutas CRUD generadas por ibex/crud-generator
Route::resource('services', ServiceController::class);

// Rutas CRUD generadas por ibex/crud-generator
Route::resource('communities', CommunityController::class)->middleware('can:communities.index');

// routes/web.php
Route::get('/service/{id}', [ServiceController::class, 'showdetail'])->name('service.detail');

// Rutas Login


Route::post('/register', [RegisterController::class, 'store'])->middleware('can:register.index')->name('register.index'); 

Route::get('/login', [WelcomeController::class, 'login'])->name('login');

Route::post('/login', [SessionsController::class, 'store'])->name('login.index');

Route::get('/logout', [SessionsController::class, 'destroy'])->name('login.destroy');

// Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');

Route::resource('appointments', AppointmentController::class)->middleware('can:appointments.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('can:home')->name('home');
