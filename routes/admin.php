<?php

use App\Http\Controllers\Admin\AvisoController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BoletinController;
use App\Http\Controllers\Admin\CandidatosController;
use App\Http\Controllers\Admin\CategoriaPostController;
use App\Http\Controllers\Admin\ContactoController;
use App\Http\Controllers\Admin\CotizacionDesingController;
use App\Http\Controllers\Admin\CotizacionFotoController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GlosarioController;
use App\Http\Controllers\Admin\OpDesingController;
use App\Http\Controllers\Admin\PaqueteFotoController;
use App\Http\Controllers\Admin\PermisionController;
use App\Http\Controllers\Admin\PlansDesingController;
use App\Http\Controllers\Admin\PortafolioFotoController;
use App\Http\Controllers\Admin\ProyectController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TestimonioFotoController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\VacanteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/users', UsersController::class)->names('admin.users');

Route::resource('/roles', RoleController::class)->names('admin.roles');
Route::resource('/permissions', PermisionController::class)->names('admin.permissions');

Route::resource('/categories', CategoriaPostController::class)->names('admin.categories');
Route::resource('/blogs', BlogController::class)->names('admin.blogs');

Route::resource('/planes', PlansDesingController::class)->names('admin.plans');
Route::resource('/cotizaciones/diseño', CotizacionDesingController::class)->names('admin.cotizacion');
Route::resource('/proyectos', ProyectController::class)->names('admin.proyecto');
Route::resource('/opiniones', OpDesingController::class)->names('admin.opinion');
Route::resource('/banners', BannerController::class)->names('admin.banner');
Route::resource('/avisos', AvisoController::class)->names('admin.aviso');
Route::resource('/testimonios', TestimonioFotoController::class)->names('admin.testimonio');
Route::resource('/sesiones', PortafolioFotoController::class)->names('admin.sesion');
Route::resource('/paquetes', PaqueteFotoController::class)->names('admin.paquete');
Route::resource('/cotizaciones/foto', CotizacionFotoController::class)->names('admin.foto');
Route::resource('/contacto', ContactoController::class)->names('admin.contacto');
Route::resource('/boletin', BoletinController::class)->names('admin.boletin');
Route::resource('/vacantes', VacanteController::class)->names('admin.vacante');
Route::get('/candidatos/{vacante}', [CandidatosController::class, 'index'])->name('candidatos.index');
Route::resource('/glosario', GlosarioController::class)->names('admin.glosario');

