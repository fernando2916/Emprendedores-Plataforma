<?php

namespace App\Http\Controllers;

use App\Models\Aviso;
use App\Models\Banner;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ultimosPost = Blog::latest()->take(3)->get();
        $banners = Banner::all();
        $aviso = Aviso::where('expira_en', '>', now())->latest()->first();
        return view('home', [
            'ultimosPost' => $ultimosPost, 
            'banners' => $banners,
            'aviso' => $aviso,
        ]);
    }
}
