<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @author TulungagungDev <tulungagungdev@gmail.com>
     * 
     * Menampilkan halaman home
     *
     * @return View
     */
    public function index()
    {
        return view('frontend.home.index');
    }
}
