<?php

namespace App\Controllers;

class PagesController extends BaseController
{
    public function index(): string
    {
        return view('pages/inicio');
    }

    public function historia(): string
    {
        return view('pages/historia');
    }

    public function servicios(): string
    {
        return view('pages/servicios');
    }

    public function galeria(): string
    {
        return view('pages/galeria');
    }

    public function clientes(): string
    {
        return view('pages/clientes');
    }
}
