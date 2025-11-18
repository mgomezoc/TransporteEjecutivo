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

        // Obtener el primer segmento de la URI (el idioma)
        $locale = $uri->getSegment(1);

        // Si el primer segmento NO es un idioma válido
        if (!in_array($locale, $appConfig->supportedLocales)) {
            // Obtener el idioma por defecto
            $defaultLocale = $appConfig->defaultLocale;

            // Construir la nueva URL
            // Solo agregamos el idioma al inicio, SIN duplicar la ruta
            $path = $uri->getPath(); // Ejemplo: "/" o "/historia"

            // Si la ruta es solo "/" redirigimos a "/{locale}/"
            if ($path === '/' || $path === '') {
                return redirect()->to(site_url($defaultLocale));
            }

            // Si la ruta tiene algo más, agregamos el idioma al inicio
            // Ejemplo: "/historia" -> "/es/historia"
            return redirect()->to(site_url($defaultLocale . $path));
        }

        // Configurar el idioma en la aplicación
        service('request')->setLocale($locale);

        // No retornar nada para continuar con la ejecución normal
        return null;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No es necesario hacer nada aquí
    }
}
