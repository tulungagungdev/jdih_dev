<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * @author TulungagungDev <tulungagungdev@gmail.com>
     * 
     * Function untuk menampilkan halaman struktur organisasi
     *
     * @return View
     */
    public function strukturOrganisasiView()
    {
        return view('frontend.pages.struktur-organisasi');
    }

    /**
     * @author TulungagungDev <tulungagungdev@gmail.com>
     * 
     * Function untuk menampilkan halaman dokumen informasi hukum
     *
     * @return View
     */
    public function produkHukum()
    {
        return view('frontend.pages.produk-hukum');
    }
}
