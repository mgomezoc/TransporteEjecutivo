<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
<?= lang('Messages.gallery_page_title') ?>
<?= $this->endSection() ?>

<?= $this->section('description') ?>
<?= lang('Messages.gallery_page_description') ?>
<?= $this->endSection() ?>

<?= $this->section('keywords') ?>
<?= lang('Messages.gallery_page_keywords') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Galería de Imágenes y Videos -->
<section id="galeria" class="gallery-page section-bg-dark">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-4"><?= lang('Messages.image_gallery') ?></h1>
                <p class="lead"><?= lang('Messages.explore_gallery') ?></p>
            </div>
        </div>

        <!-- Filtros -->
        <div class="text-center mb-4">
            <button class="filter-button active" data-filter="*">All</button>
            <button class="filter-button" data-filter=".certificados"><?= lang('Messages.certifications') ?></button>
            <button class="filter-button" data-filter=".vehiculos"><?= lang('Messages.vehicles') ?></button>
            <button class="filter-button" data-filter=".videos"><?= lang('Messages.videos') ?></button>
        </div>

        <!-- Contenedor Isotope -->
        <div class="isotope-grid">
            <!-- Galería de Certificados -->
            <div class="isotope-item certificados">
                <a href="<?= base_url('assets/images/certificados/cert1.png') ?>" class="gallery-item" data-fancybox="certificados">
                    <img src="<?= base_url('assets/images/certificados/cert1.png') ?>" class="img-fluid rounded" alt="Certificado 1">
                </a>
            </div>
            <div class="isotope-item certificados">
                <a href="<?= base_url('assets/images/certificados/cert2.png') ?>" class="gallery-item" data-fancybox="certificados">
                    <img src="<?= base_url('assets/images/certificados/cert2.png') ?>" class="img-fluid rounded" alt="Certificado 2">
                </a>
            </div>
            <div class="isotope-item certificados">
                <a href="<?= base_url('assets/images/certificados/cert3.jpg') ?>" class="gallery-item" data-fancybox="certificados">
                    <img src="<?= base_url('assets/images/certificados/cert3.jpg') ?>" class="img-fluid rounded" alt="Certificado 3">
                </a>
            </div>

            <!-- Galería de Vehículos -->
            <?php for ($i = 1; $i <= 27; $i++): ?>
                <div class="isotope-item vehiculos">
                    <a href="<?= base_url("assets/images/galeria/$i.webp") ?>" class="gallery-item" data-fancybox="vehiculos">
                        <img src="<?= base_url("assets/images/galeria/$i.webp") ?>" class="img-fluid rounded" alt="<?= lang('Messages.vehicle') ?> <?= $i ?>">
                    </a>
                </div>
            <?php endfor; ?>

            <!-- Galería de Videos -->
            <div class="isotope-item videos">
                <a href="<?= base_url('assets/videos/VID-20240815-WA0015.mp4') ?>" data-fancybox="videos" data-caption="Video 1">
                    <img src="<?= base_url('assets/images/video_thumbnails/thumb1.png') ?>" alt="Video 1" class="img-fluid rounded">
                </a>
            </div>
            <div class="isotope-item videos">
                <a href="<?= base_url('assets/videos/VID-20240815-WA0021.mp4') ?>" data-fancybox="videos" data-caption="Video 2">
                    <img src="<?= base_url('assets/images/video_thumbnails/thumb2.png') ?>" alt="Video 2" class="img-fluid rounded">
                </a>
            </div>
            <div class="isotope-item videos">
                <a href="<?= base_url('assets/videos/VID-20240815-WA0022.mp4') ?>" data-fancybox="videos" data-caption="Video 3">
                    <img src="<?= base_url('assets/images/video_thumbnails/thumb3.png') ?>" alt="Video 3" class="img-fluid rounded">
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.27/dist/fancybox.css">
<style>
    /* Botones de filtrado */
    .filter-button {
        background-color: #0056b3;
        border: none;
        color: #fff;
        padding: 10px 20px;
        margin: 5px;
        border-radius: 50px;
        text-transform: uppercase;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease;
        display: inline-block;
    }

    .filter-button:hover,
    .filter-button.active {
        background-color: #ff5733;
        color: #fff;
    }

    /* Alineación y centrado de la galería */
    .gallery-page {
        text-align: center;
    }

    .isotope-grid {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-left: -15px;
        margin-right: -15px;
    }

    .isotope-item {
        padding: 15px;
        flex: 1 0 21%;
        max-width: 21%;
        box-sizing: border-box;
        margin-bottom: 30px;
    }

    .isotope-item img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    }

    .isotope-item:hover img {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 768px) {
        .isotope-item {
            flex: 1 0 48%;
            max-width: 48%;
        }
    }

    @media (max-width: 480px) {
        .isotope-item {
            flex: 1 0 100%;
            max-width: 100%;
        }
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="https://cdn.jsdelivr.net/npm/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.27/dist/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inicia Fancybox
        Fancybox.bind('[data-fancybox]', {
            Thumbs: false,
            Toolbar: {
                display: [{
                        id: 'zoom',
                        position: 'left'
                    },
                    {
                        id: 'download',
                        position: 'left'
                    },
                    {
                        id: 'close',
                        position: 'right'
                    }
                ]
            }
        });

        // Inicializa Isotope solo después de que todas las imágenes se hayan cargado
        var imgLoad = imagesLoaded('.isotope-grid', function() {
            var iso = new Isotope('.isotope-grid', {
                itemSelector: '.isotope-item',
                layoutMode: 'fitRows'
            });

            // Filtrado con botones
            var filterButtons = document.querySelectorAll('.filter-button');
            filterButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var filterValue = this.getAttribute('data-filter');
                    filterButtons.forEach(function(btn) {
                        btn.classList.remove('active');
                    });
                    this.classList.add('active');
                    iso.arrange({
                        filter: filterValue
                    });
                });
            });
        });
    });
</script>
<?= $this->endSection() ?>