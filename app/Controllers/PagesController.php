<?php

namespace App\Controllers;

class PagesController extends BaseController
{
    public function index(): string
    {
        $locale = service('request')->getLocale(); // Obtener el idioma actual
        $data = [
            'title' => 'Inicio',
            'description' => 'Transporte Ejecutivo Terrestre - Servicios de transporte seguro y cómodo.',
            'keywords' => 'transporte ejecutivo, transporte terrestre, servicios de transporte, seguridad, comodidad',
            'locale' => $locale  // Pasar el idioma a la vista
        ];

        return view('pages/inicio', $data);
    }

    public function historia(): string
    {
        $locale = service('request')->getLocale();
        $data = [
            'title' => 'Nuestra Historia',
            'description' => 'Conoce la historia de Transporte Ejecutivo y nuestra trayectoria en el sector de transporte seguro y confortable.',
            'keywords' => 'historia, transporte ejecutivo, trayectoria, empresa de transporte',
            'locale' => $locale
        ];

        return view('pages/historia', $data);
    }

    public function servicios(): string
    {
        $locale = service('request')->getLocale();
        $data = [
            'title' => 'Nuestros Servicios',
            'description' => 'Explora los servicios de transporte ejecutivo que ofrecemos, adaptados a tus necesidades con la mayor seguridad.',
            'keywords' => 'servicios de transporte, transporte ejecutivo, seguridad, confort, puntualidad',
            'locale' => $locale
        ];

        return view('pages/servicios', $data);
    }

    public function galeria(): string
    {
        $locale = service('request')->getLocale();
        $data = [
            'title' => 'Galería de Imágenes',
            'description' => 'Visita nuestra galería de imágenes y descubre más sobre nuestros servicios de transporte ejecutivo en acción.',
            'keywords' => 'galería, imágenes, transporte ejecutivo, servicios, confort',
            'locale' => $locale
        ];

        return view('pages/galeria', $data);
    }

    public function clientes(): string
    {
        $locale = service('request')->getLocale();
        $data = [
            'title' => 'Nuestros Clientes',
            'description' => 'Conoce a nuestros clientes y cómo hemos superado sus expectativas con nuestros servicios de transporte ejecutivo.',
            'keywords' => 'clientes, transporte ejecutivo, satisfacción, servicios de transporte',
            'locale' => $locale
        ];

        return view('pages/clientes', $data);
    }
}
