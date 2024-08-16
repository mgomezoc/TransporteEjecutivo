document.addEventListener('DOMContentLoaded', function () {
    // Inicia Fancybox para todas las imágenes con la clase 'gallery-item'
    Fancybox.bind('[data-fancybox="gallery"]', {
        Thumbs: false,
        Toolbar: {
            display: [
                { id: 'zoom', position: 'left' },
                { id: 'download', position: 'left' },
                { id: 'close', position: 'right' }
            ]
        }
    });

    // Animación de entrada con AOS
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });

    // Si tienes alguna lógica adicional para manejar hover o clics
    document.querySelectorAll('.gallery-item-wrapper').forEach(function (item) {
        item.addEventListener('mouseover', function () {
            this.classList.add('hovered');
        });

        item.addEventListener('mouseout', function () {
            this.classList.remove('hovered');
        });
    });
});
