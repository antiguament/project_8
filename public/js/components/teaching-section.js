document.addEventListener('DOMContentLoaded', function() {
    // Animaciones para los puntos de enseñanza
    const points = document.querySelectorAll('.teaching-point');
    
    points.forEach((point, index) => {
        setTimeout(() => {
            point.style.opacity = 1;
            point.style.transform = 'translateY(0)';
        }, 100 * index);
    });
});