<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoriaPostController;
use App\Http\Controllers\Admin\CotizacionDesingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OpDesingController;
use App\Http\Controllers\Admin\PermisionController;
use App\Http\Controllers\Admin\PlansDesingController;
use App\Http\Controllers\Admin\ProyectController;
use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/users', UsersController::class)->names('admin.users');

Route::resource('/roles', RoleController::class)->names('admin.roles');
Route::resource('/permissions', PermisionController::class)->names('admin.permissions');

Route::resource('/categories', CategoriaPostController::class)->names('admin.categories');
Route::resource('/blogs', BlogController::class)->names('admin.blogs');

Route::resource('/planes', PlansDesingController::class)->names('admin.plans');
Route::resource('/cotizaciones', CotizacionDesingController::class)->names('admin.cotizacion');
Route::resource('/proyectos', ProyectController::class)->names('admin.proyecto');
Route::resource('/opiniones', OpDesingController::class)->names('admin.opinion');

