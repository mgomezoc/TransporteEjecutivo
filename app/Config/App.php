<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    // ⚠️ IMPORTANTE: Para desarrollo local, la baseURL debe apuntar SOLO al dominio
    // Laragon ya está configurado para apuntar a la carpeta /public/
    public string $baseURL = 'http://transporteejecutivo.test/';

    public string $indexPage = '';

    public string $uriProtocol = 'REQUEST_URI';

    public string $permittedURIChars = 'a-z 0-9~%.:_\-';

    public string $defaultLocale = 'es';

    public bool $negotiateLocale = false;

    public array $supportedLocales = ['es', 'en'];

    public string $appTimezone = 'UTC';

    public string $charset = 'UTF-8';

    // ⚠️ IMPORTANTE: En desarrollo local con HTTP, debe ser false
    // En producción con HTTPS, cambiar a true
    public bool $forceGlobalSecureRequests = false;

    public array $allowedHostnames = [];

    public bool $CSPEnabled = false;
}
