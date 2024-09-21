<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\App;

class Language implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $appConfig = config(App::class);
        $uri = $request->getUri();

        // Verifica si el idioma está en la URL
        $locale = $uri->getSegment(1); // El primer segmento es el idioma

        if (!in_array($locale, $appConfig->supportedLocales)) {
            // Redirige al idioma por defecto si el idioma no está presente
            $defaultLocale = $appConfig->defaultLocale;
            $newUrl = base_url($defaultLocale . '/' . ltrim($uri->getPath(), '/'));

            return redirect()->to($newUrl);
        }

        // Configurar el idioma en la aplicación
        service('request')->setLocale($locale);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No es necesario hacer nada aquí
    }
}
