<!-- Hero Section - Curso de Inglés A1 -->
<section id="hero-section" class="relative overflow-hidden bg-[#ffc4a6]">
    <div class="container mx-auto px-6 py-16 md:py-24 lg:py-32">
        <div class="flex flex-col lg:flex-row items-center justify-between">
            <!-- Text Content -->
            <div class="lg:w-1/2 mb-12 lg:mb-0">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#6d165a] mb-6 opacity-0 animate-fadeInUp" style="animation-delay: 0.2s;">
                    Domina el inglés <span class="text-[#ec5c8d]">desde cero</span>
                </h1>
                <p class="text-lg md:text-xl text-[#a0346e] mb-8 opacity-0 animate-fadeInUp" style="animation-delay: 0.4s;">
                    Nuestro curso A1 te lleva paso a paso en tu viaje de aprendizaje. Método probado, resultados garantizados.
                </p>
                <div class="opacity-0 animate-fadeInUp" style="animation-delay: 0.6s;">
                    <button id="cta-button" class="transition-all duration-300 bg-gradient-to-r from-[#ec5c8d] to-[#ff8c91] text-white font-semibold py-3 px-8 rounded-full text-lg hover:scale-105 hover:shadow-lg">
                        Comenzar ahora
                    </button>
                </div>
                <div class="mt-12 flex flex-wrap gap-4 opacity-0 animate-fadeInUp" style="animation-delay: 0.8s;">
                    <div class="flex items-center bg-white/30 px-4 py-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#6d165a]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="ml-2 text-[#a0346e]">Certificado oficial</span>
                    </div>
                    <div class="flex items-center bg-white/30 px-4 py-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#6d165a]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="ml-2 text-[#a0346e]">Profesores nativos</span>
                    </div>
                    <div class="flex items-center bg-white/30 px-4 py-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#6d165a]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="ml-2 text-[#a0346e]">Acceso 24/7</span>
                    </div>
                </div>
            </div>
            
            <!-- Image Content -->
            <div class="lg:w-1/2 opacity-0 animate-fadeInUp" style="animation-delay: 0.5s;">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                         alt="Persona aprendiendo inglés" 
                         class="rounded-lg shadow-2xl w-full max-w-md mx-auto lg:max-w-full border-4 border-white">
                    <div class="absolute -bottom-4 -right-4 bg-[#ec5c8d] text-white px-4 py-2 rounded-lg shadow-lg">
                        <span class="font-bold">Nivel A1</span> - Principiante
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Elementos decorativos -->
    <div class="absolute top-0 left-0 w-32 h-32 bg-[#ec5c8d] rounded-full opacity-10 -translate-x-16 -translate-y-16"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-[#a0346e] rounded-full opacity-10 translate-x-32 translate-y-32"></div>








    {{-- Enlace al archivo CSS específico del componente --}}
    <link rel="stylesheet" href="{{ asset('css/components/secction-a1/a1-hero.css') }}">

    {{-- Enlace al archivo JavaScript específico del componente (si es necesario) --}}
    <script src="{{ asset('js/components/secction-a1/a1-hero.js') }}"></script>





</section>

<!-- Estilos inline para las animaciones (puedes moverlos a tu CSS principal) -->

