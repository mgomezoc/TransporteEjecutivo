<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class ErrorsController extends BaseController
{
    public function show404()
    {
        // Puedes lanzar una excepción de página no encontrada para que CodeIgniter maneje el 404 automáticamente.
        throw PageNotFoundException::forPageNotFound();
    }

    public function custom404()
    {
        return view('errors/html/404');
    }
}
