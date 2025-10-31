<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class DashboardController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('can:ver panel')
        ];
    }
    
    public function index()
    {
        $totalusuarios = User::count();
        $totalpublicaciones = Blog::count();
        $totalproductos = Producto::count();
        return view('admin.Dashboard', compact(
            'totalusuarios',
            'totalpublicaciones',
            'totalproductos'
        ));
    }
}
