<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Sitemap extends Controller
{
    public function index()
    {
        // Obtener la base URL y asegurarse de que no termina en una barra
        $baseURL = rtrim(base_url(), '/');

        // Lista de URLs que deseas incluir en el sitemap, con `ltrim` para evitar problemas de doble slash
        $urls = [
            [
                'loc' => $baseURL . '/es',
                'lastmod' => '2024-08-28T08:47:00+00:00',
            ],
            [
                'loc' => $baseURL . '/es/historia',
                'lastmod' => '2024-08-28T08:47:00+00:00',
            ],
            [
                'loc' => $baseURL . '/es/servicios',
                'lastmod' => '2024-08-28T08:47:00+00:00',
            ],
            [
                'loc' => $baseURL . '/es/galeria',
                'lastmod' => '2024-08-28T08:47:00+00:00',
            ],
            [
                'loc' => $baseURL . '/es/clientes',
                'lastmod' => '2024-08-28T08:47:00+00:00',
            ],
            [
                'loc' => $baseURL . '/en',
                'lastmod' => '2024-08-28T08:47:00+00:00',
            ],
            [
                'loc' => $baseURL . '/en/history',
                'lastmod' => '2024-08-28T08:47:00+00:00',
            ],
            [
                'loc' => $baseURL . '/en/services',
                'lastmod' => '2024-08-28T08:47:00+00:00',
            ],
            [
                'loc' => $baseURL . '/en/gallery',
                'lastmod' => '2024-08-28T08:47:00+00:00',
            ],
            [
                'loc' => $baseURL . '/en/clients',
                'lastmod' => '2024-08-28T08:47:00+00:00',
            ],
        ];

        // Crear el sitemap en formato XML
        $sitemap = new \SimpleXMLElement('<urlset/>');
        $sitemap->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

        foreach ($urls as $url) {
            $urlElement = $sitemap->addChild('url');
            $urlElement->addChild('loc', $url['loc']);
            $urlElement->addChild('lastmod', $url['lastmod']);
            $urlElement->addChild('changefreq', 'weekly');
            $urlElement->addChild('priority', '0.8');
        }

        // Configurar la respuesta HTTP como XML
        return $this->response
            ->setHeader('Content-Type', 'application/xml')
            ->setBody($sitemap->asXML());
    }
}
