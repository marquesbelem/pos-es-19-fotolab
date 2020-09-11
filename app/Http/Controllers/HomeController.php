<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home() {
        return view('home.index');
    }

    public function PerfilFotografo() {
        return view('home.perfil-fotografo');
    }
}
