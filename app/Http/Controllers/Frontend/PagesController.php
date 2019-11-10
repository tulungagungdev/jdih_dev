<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function strukturOrganisasi()
    {
        return view('frontend.pages.struktur-organisasi');
    }
}
