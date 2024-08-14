<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Language implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Obtener el idioma de la URL y configurarlo en la aplicación
        $locale = $request->getLocale();
        service('request')->setLocale($locale);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No es necesario hacer nada aquí por ahora
    }
}
