<section class="bg-gradient-to-br from-indigo-600 to-purple-700 text-white py-24 relative overflow-hidden" style="background-image: url('{{ asset('images/imj_10.jpeg') }}'); background-size: cover; background-position: center;">
  <div class="absolute inset-0 bg-black opacity-25"></div>
  <div class="container mx-auto px-4 md:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
      <div class="order-2 md:order-1 text-center md:text-left">
        <h1 class="text-5xl lg:text-6xl font-bold mb-6 hero-title" data-animation="fade-in-down" data-delay="300">
          Allalettera <span class="text-yellow-400">Restaurante Gourmet</span>
        </h1>
        <p class="text-xl lg:text-2xl mb-8 hero-subtitle" data-animation="fade-in-left" data-delay="500">
          Descubre la excelencia culinaria en San Carlos, Antioquia. Sabores únicos y experiencias inolvidables.
        </p>
        <div class="space-x-4 hero-buttons" data-animation="fade-in-up" data-delay="700">
          <a href="#" class="bg-yellow-400 text-indigo-700 font-bold py-3 px-6 rounded-full hover:bg-yellow-500 transition duration-300">
            Ver Menú
          </a>
          <a href="#" class="bg-transparent border border-yellow-400 text-yellow-400 font-semibold py-3 px-6 rounded-full hover:bg-yellow-400 hover:text-indigo-700 transition duration-300">
            Reservar Ahora
          </a>
        </div>
      </div>
      <div class="order-1 md:order-2 relative">
        <div class="w-full max-w-md mx-auto rounded-lg shadow-lg overflow-hidden hero-image-container" data-animation="zoom-in" data-delay="800">
          </div>
      </div>
    </div>
  </div>
  <div class="absolute top-0 left-0 w-48 h-48 bg-yellow-300 rounded-full transform -translate-x-1/2 -translate-y-1/2 opacity-50 js-parallax" data-speed-x="0.2" data-speed-y="0.2"></div>
  <div class="absolute bottom-0 right-0 w-64 h-64 bg-indigo-300 rounded-full transform translate-x-1/3 translate-y-1/3 opacity-40 js-rotate"></div>
  <div class="absolute top-1/4 right-1/4 w-32 h-32 bg-purple-300 rounded-md opacity-60 js-float"></div>
</section>

<style>
  /* Estilos CSS nativo para complementar Tailwind */
  .hero-title {
    letter-spacing: -0.05em;
  }

  .hero-subtitle {
    line-height: 1.75;
    color: rgba(255, 255, 255, 0.8);
  }

  /* Animaciones personalizadas */
  @keyframes fade-in-down {
    from {
      opacity: 0;
      transform: translateY(-30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fade-in-left {
    from {
      opacity: 0;
      transform: translateX(-30px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes fade-in-up {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes zoom-in {
    from {
      opacity: 0;
      transform: scale(0.8);
    }
    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  @keyframes rotate {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(360deg);
    }
  }

  @keyframes float {
    0% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-10px);
    }
    100% {
      transform: translateY(0);
    }
  }

  /* Aplicando las animaciones a los elementos */
  .hero-title {
    animation: fade-in-down 0.8s ease-out forwards;
  }

  .hero-subtitle {
    animation: fade-in-left 0.8s ease-out forwards;
  }

  .hero-buttons {
    animation: fade-in-up 0.8s ease-out forwards;
  }

  .hero-image-container {
    animation: zoom-in 0.8s ease-out forwards;
  }

  .js-rotate {
    animation: rotate 10s linear infinite;
  }

  .js-float {
    animation: float 3s ease-in-out infinite alternate;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Parallax effect (ejemplo sencillo)
    const parallaxElements = document.querySelectorAll('.js-parallax');
    parallaxElements.forEach(element => {
      const speedX = parseFloat(element.dataset.speedX) || 0.1;
      const speedY = parseFloat(element.dataset.speedY) || 0.1;

      window.addEventListener('mousemove', (e) => {
        const x = (window.innerWidth - e.clientX) * speedX;
        const y = (window.innerHeight - e.clientY) * speedY;
        element.style.transform = `translate(-50%, -50%) translate(${x}px, ${y}px)`;
      });
    });
  });
</script>












