<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermisionController;
use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/usuarios', [UsersController::class, 'index'])->name('users.index');

Route::resource('/roles', RoleController::class)->names('admin.roles');
Route::resource('/permissions', PermisionController::class)->names('admin.permissions');
