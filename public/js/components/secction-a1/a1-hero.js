
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('#hero-section [class*="opacity-0"]').forEach(el => {
            observer.observe(el);
        });


        const ctaBtn = document.getElementById('cta-button');
        if (ctaBtn) {
            ctaBtn.addEventListener('click', () => {
                console.log('CTA clicked - Implementa tu lógica aquí');
            
            });
        }
    });
