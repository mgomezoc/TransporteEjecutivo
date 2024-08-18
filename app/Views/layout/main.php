<!doctype html>
<html class="no-js" lang="<?= esc($locale) ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($this->renderSection('title', 'Bienvenido')) ?> - Transporte Ejecutivo</title>
    <meta name="description" content="<?= esc($this->renderSection('description', 'Descubre nuestro servicio de transporte ejecutivo. Seguridad, confort y puntualidad en cada viaje.')) ?>">
    <meta name="keywords" content="<?= esc($this->renderSection('keywords', 'transporte ejecutivo, servicios de transporte, confort, seguridad')) ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= current_url() ?>">

    <!-- Preconnect & Prefetch -->
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

    <!-- Open Graph Metadata -->
    <meta property="og:title" content="<?= esc($this->renderSection('title', 'Bienvenido')) ?> - Transporte Ejecutivo">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:image" content="<?= base_url('img/og-image.png') ?>">
    <meta property="og:description" content="<?= esc($this->renderSection('description', 'Descubre nuestro servicio de transporte ejecutivo. Seguridad, confort y puntualidad en cada viaje.')) ?>">
    <?= $this->renderSection('open_graph') ?>

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= esc($this->renderSection('title', 'Bienvenido')) ?> - Transporte Ejecutivo">
    <meta name="twitter:description" content="<?= esc($this->renderSection('description', 'Descubre nuestro servicio de transporte ejecutivo. Seguridad, confort y puntualidad en cada viaje.')) ?>">
    <meta name="twitter:image" content="<?= base_url('img/og-image.png') ?>">

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('site.webmanifest') ?>">
    <link rel="mask-icon" href="<?= base_url('safari-pinned-tab.svg') ?>" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>?v=<?= time() ?>">
    <?= $this->renderSection('styles') ?>

    <script src="https://kit.fontawesome.com/901438e2f4.js" crossorigin="anonymous"></script>
    <script>
        const baseUrl = "<?= base_url() ?>";
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div id="scrollToTop" class="scrollToTop-container animate__animated animate__fadeIn">
        <a href="#" class="scrollToTop">
            <i class="fa-solid fa-arrow-up-to-line"></i>
        </a>
    </div>

    <div class="wrapper">
        <header class="header bg-primary text-white">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="<?= base_url('/' . esc($locale)) ?>">
                        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Transporte Ejecutivo" width="204">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link <?= (uri_string() == esc($locale)) ? 'active' : '' ?>" aria-current="page" href="<?= base_url('/' . esc($locale)) ?>"><?= $locale === 'es' ? 'Inicio' : 'Home' ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= (uri_string() == $locale . '/historia') ? 'active' : '' ?>" href="<?= base_url($locale === 'es' ? 'es/historia' : 'en/history') ?>"><?= $locale === 'es' ? 'Historia' : 'History' ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= (uri_string() == $locale . '/servicios') ? 'active' : '' ?>" href="<?= base_url($locale === 'es' ? 'es/servicios' : 'en/services') ?>"><?= $locale === 'es' ? 'Servicios' : 'Services' ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= (uri_string() == $locale . '/galeria') ? 'active' : '' ?>" href="<?= base_url($locale === 'es' ? 'es/galeria' : 'en/gallery') ?>"><?= $locale === 'es' ? 'Galería de Imágenes' : 'Gallery' ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= (uri_string() == $locale . '/clientes') ? 'active' : '' ?>" href="<?= base_url($locale === 'es' ? 'es/clientes' : 'en/clients') ?>"><?= $locale === 'es' ? 'Nuestros Clientes' : 'Clients' ?></a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-3">
                            <li class="nav-item">
                                <a class="nav-link <?= ($locale == 'es') ? 'active' : '' ?>" href="<?= base_url('/es') ?>"><i class="fa-solid fa-globe"></i> ES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($locale == 'en') ? 'active' : '' ?>" href="<?= base_url('/en') ?>"><i class="fa-solid fa-globe"></i> EN</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="">
            <?= $this->renderSection('content') ?>
        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="container footer-container">
                <div class="row">
                    <!-- Información del Cliente -->
                    <div class="col-lg-6 footer-col">
                        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Transporte Ejecutivo" class="footer-logo">
                        <p>Atención 24 Horas de Lunes a Domingo.</p>
                        <p>Contacta con nosotros para obtener servicios de transporte ejecutivo de alta calidad.</p>
                        <ul class="footer-contact">
                            <li><a href="https://wa.me/528444277018" target="_blank"><i class="fa fa-phone"></i> Local: 844•427•7018</a></li>
                        </ul>
                    </div>

                    <!-- Contacto y Correos Electrónicos -->
                    <div class="col-lg-6 footer-col">
                        <h5>Contáctanos:</h5>
                        <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=ryk.das@gmail.com" target="_blank"><i class="fa fa-envelope"></i> ryk.das@gmail.com</a></p>
                        <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=luiis.das@gmail.com" target="_blank"><i class="fa fa-envelope"></i> luiis.das@gmail.com</a></p>
                        <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=tapiaangel899@gmail.com" target="_blank"><i class="fa fa-envelope"></i> tapiaangel899@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                © Transporte Ejecutivo - Todos los derechos reservados.
            </div>
        </footer>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
    <script src="<?= base_url('assets/js/vendor/modernizr-3.11.2.min.js') ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
    <?= $this->renderSection('scripts') ?>
</body>

</html>