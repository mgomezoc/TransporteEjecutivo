document.addEventListener('DOMContentLoaded', function () {
    // Inicia Fancybox
    Fancybox.bind('[data-fancybox]', {
        Thumbs: false,
        Toolbar: {
            display: [
                { id: 'zoom', position: 'left' },
                { id: 'download', position: 'left' },
                { id: 'close', position: 'right' }
            ]
        }
    });

    // Inicializa Isotope solo después de que todas las imágenes se hayan cargado
    var imgLoad = imagesLoaded('.isotope-grid', function () {
        var iso = new Isotope('.isotope-grid', {
            itemSelector: '.isotope-item',
            layoutMode: 'fitRows'
        });

        // Filtrado con botones
        var filterButtons = document.querySelectorAll('.filter-button');
        filterButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var filterValue = this.getAttribute('data-filter');
                filterButtons.forEach(function (btn) {
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
