<!doctype html>
<html class="no-js" lang="<?= esc($locale) ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($this->renderSection('title', lang('Messages.title'))) ?> - <?= lang('Messages.company_name') ?></title>
    <meta name="description" content="<?= esc($this->renderSection('description', lang('Messages.description'))) ?>">
    <meta name="keywords" content="<?= esc($this->renderSection('keywords', lang('Messages.keywords'))) ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= base_url(uri_string()) ?>">

    <!-- Preconnect & Prefetch -->
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

    <!-- Open Graph Metadata -->
    <meta property="og:title" content="<?= esc($this->renderSection('title', lang('Messages.title'))) ?> - <?= lang('Messages.company_name') ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:image" content="<?= base_url('img/og-image.png') ?>">
    <meta property="og:description" content="<?= esc($this->renderSection('description', lang('Messages.description'))) ?>">
    <?= $this->renderSection('open_graph') ?>

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= esc($this->renderSection('title', lang('Messages.title'))) ?> - <?= lang('Messages.company_name') ?>">
    <meta name="twitter:description" content="<?= esc($this->renderSection('description', lang('Messages.description'))) ?>">
    <meta name="twitter:image" content="<?= base_url('img/og-image.png') ?>">

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/images/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/images/favicon/site.webmanifest') ?>">
    <link rel="mask-icon" href="<?= base_url('assets/images/favicon/safari-pinned-tab.svg') ?>" color="#5bbad5">
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon/favicon.ico') ?>">
    <meta name="msapplication-TileColor" content="#001f3f">
    <meta name="msapplication-config" content="<?= base_url('assets/images/favicon/browserconfig.xml') ?>">
    <meta name="theme-color" content="#001f3f"> <!-- Ajuste al color del tema -->

    <!-- Inline Critical CSS -->
    <style>
        /* CSS crítico para el contenido above-the-fold */
        body {
            background-color: #001f3f;
            margin: 0;
            padding: 0;
            font-family: 'Raleway', sans-serif;
        }

        .header,
        .footer {
            background-color: #001f3f;
            color: white;
        }

        .header .navbar-brand img {
            width: 204px;
        }

        /* Otros estilos críticos */
    </style>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" defer>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" defer>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" defer>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" defer>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>?v=<?= time() ?>" defer>
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
                        <img src="<?= base_url('assets/images/logo.webp') ?>" alt="<?= lang('Messages.company_name') ?>">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link <?= (uri_string() == $locale || uri_string() == '') ? 'active' : '' ?>" aria-current="page" href="<?= base_url('/' . esc($locale)) ?>"><?= lang('Messages.home') ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= (uri_string() == $locale . '/historia' || uri_string() == $locale . '/history') ? 'active' : '' ?>" href="<?= base_url($locale === 'es' ? 'es/historia' : 'en/history') ?>"><?= lang('Messages.history') ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= (uri_string() == $locale . '/servicios' || uri_string() == $locale . '/services') ? 'active' : '' ?>" href="<?= base_url($locale === 'es' ? 'es/servicios' : 'en/services') ?>"><?= lang('Messages.services') ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= (uri_string() == $locale . '/galeria' || uri_string() == $locale . '/gallery') ? 'active' : '' ?>" href="<?= base_url($locale === 'es' ? 'es/galeria' : 'en/gallery') ?>"><?= lang('Messages.gallery') ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= (uri_string() == $locale . '/clientes' || uri_string() == $locale . '/clients') ? 'active' : '' ?>" href="<?= base_url($locale === 'es' ? 'es/clientes' : 'en/clients') ?>"><?= lang('Messages.clients') ?></a>
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

        <section id="clientes-carousel" class="clients-carousel section-bg">
            <div class="container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        $clientes = [
                            'el_universal.jpeg',
                            '_0009_televisa.webp',
                            '_0004_azteca.webp',
                            '_0002_chrysler.webp',
                            '_0005_powertrain.webp',
                            '_0006_millsteel.webp',
                            '_0007_martinrea.webp',
                            '_0008_jiffytite.webp',
                            '_0010_faurencia.webp',
                            '_0012_metalflow.webp',
                            'maussan.jpeg',
                            '_0016_formex.webp',
                            '_0019_spentech.webp',
                            '_0020_das.webp',
                            '_0022_brunner.webp',
                            'airway.webp',
                            'goss.webp',
                            'LaZboy.jpg',
                            'pacCNC.jpg',
                            'ufi.webp',
                            'yanfeng_2.jpg',
                            'yanfeng.webp',
                            'logo-armo-blue-02.png'
                        ];

                        foreach ($clientes as $cliente): ?>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/images/clientes/' . $cliente) ?>" alt="<?= pathinfo($cliente, PATHINFO_FILENAME) ?>" class="img-fluid" loading="lazy" width="150" height="100">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->
        <footer class="footer">
            <div class="container footer-container">
                <div class="row">
                    <!-- Información del Cliente -->
                    <div class="col-lg-6 footer-col">
                        <img src="<?= base_url('assets/images/logo.webp') ?>" alt="<?= lang('Messages.company_name') ?>" class="footer-logo">
                        <p><?= lang('Messages.footer_contact') ?></p>
                        <p><?= lang('Messages.footer_quality') ?></p>
                        <ul class="footer-contact">
                            <li><a href="https://wa.me/528444277018" target="_blank"><i class="fa fa-phone"></i> +528444277018</a></li>
                        </ul>
                    </div>

                    <!-- Contacto y Correos Electrónicos -->
                    <div class="col-lg-6 footer-col">
                        <h5><?= lang('Messages.contact_us') ?>:</h5>
                        <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=ryk.das@gmail.com" target="_blank"><i class="fa fa-envelope"></i> ryk.das@gmail.com</a></p>
                        <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=luiis.das@gmail.com" target="_blank"><i class="fa fa-envelope"></i> luiis.das@gmail.com</a></p>
                        <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=tapiaangel899@gmail.com" target="_blank"><i class="fa fa-envelope"></i> tapiaangel899@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                © <?= lang('Messages.company_name') ?> - <?= lang('Messages.all_rights_reserved') ?>.
            </div>
        </footer>
    </div>

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js" defer></script>
    <script src="<?= base_url('assets/js/app.js') ?>" defer></script>
    <?= $this->renderSection('scripts') ?>
</body>

</html>