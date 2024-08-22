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

    // Inicializa Masonry
    var masonryGrid = document.querySelector('.masonry-grid');
    var msnry = new Masonry(masonryGrid, {
        itemSelector: '.masonry-item',
        columnWidth: '.masonry-item',
        percentPosition: true
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
            // Filtro usando Isotope o similar
            msnry.arrange({
                filter: filterValue === '*' ? '*' : filterValue
            });
        });
    });
});
