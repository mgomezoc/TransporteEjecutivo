document.addEventListener('DOMContentLoaded', function () {
    // Inicia Fancybox para todas las imágenes y videos
    Fancybox.bind('[data-fancybox="certificados"]', {
        Thumbs: false,
        Toolbar: {
            display: [
                { id: 'zoom', position: 'left' },
                { id: 'download', position: 'left' },
                { id: 'close', position: 'right' }
            ]
        }
    });

    Fancybox.bind('[data-fancybox="vehiculos"]', {
        Thumbs: false,
        Toolbar: {
            display: [
                { id: 'zoom', position: 'left' },
                { id: 'download', position: 'left' },
                { id: 'close', position: 'right' }
            ]
        }
    });

    Fancybox.bind('[data-fancybox="videos"]', {
        Thumbs: false,
        Toolbar: {
            display: [
                { id: 'play', position: 'left' },
                { id: 'close', position: 'right' }
            ]
        }
    });

    // Lógica adicional para hover o clics
    document.querySelectorAll('.gallery-item-wrapper').forEach(function (item) {
        item.addEventListener('mouseover', function () {
            this.classList.add('hovered');
        });

        item.addEventListener('mouseout', function () {
            this.classList.remove('hovered');
        });
    });
});
