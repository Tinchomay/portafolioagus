<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index() 
    {
        return view('perfil.index');
    }

    public function about() 
    {
        return view('perfil.sobre-mi');
    }

    public function educacion()
    {
        return view('perfil.educacion');
    }

    public function contacto()
    {
        return view('perfil.contacto');
    }
}
