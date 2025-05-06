
   
   
   
   
   
   
   
   
   
   
   
   <section id="improved-numbers-age" class="bg-gradient-to-br from-[#ffb74d] to-[#ff9800] py-16 md:py-24 lg:py-32 relative overflow-hidden">
    <div class="container mx-auto px-6">
        <!-- Encabezado animado -->
        <div class="text-center mb-16">
            <div class="inline-block relative">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#e65100] mb-4 animate-float">
                    <span class="block">Numbers & Age</span>
                    <span class="text-2xl md:text-3xl font-medium text-white bg-[#ef6c00] px-6 py-2 rounded-full inline-block mt-4 shadow-lg">Learn While Playing!</span>
                </h1>
                <div class="absolute -bottom-4 left-0 right-0 h-4 bg-[#fb8c00] rounded-full mx-auto animate-wave" style="width: 200px;"></div>
            </div>
        </div>

        <!-- Sección de Juegos -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            <!-- Juego 1: Memory de Números Corregido -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl p-8 transform transition-all hover:scale-[1.02] hover:shadow-3xl animate-fadeInUp">
                <div class="flex items-center mb-6">
                    <div class="bg-[#ef6c00] p-3 rounded-xl mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-[#e65100]">Number Memory Game</h2>
                </div>
                
                <p class="text-[#ef6c00] mb-6">Match the numbers with their English words!</p>
                
                <div class="grid grid-cols-4 gap-3" id="number-memory-game">
                    <!-- Las tarjetas se generarán con JavaScript -->
                </div>
                
                <div class="mt-6 flex justify-between items-center">
                    <span id="memory-score" class="text-[#e65100] font-medium">Matches: 0/8</span>
                    <button id="reset-memory" class="bg-[#fb8c00] hover:bg-[#e65100] text-white font-medium py-2 px-4 rounded-lg transition-all">
                        Reset Game
                    </button>
                </div>
            </div>
            
            <!-- Nuevo Juego 2: Age Matching Game -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl p-8 transform transition-all hover:scale-[1.02] hover:shadow-3xl animate-fadeInUp" style="animation-delay: 0.2s">
                <div class="flex items-center mb-6">
                    <div class="bg-[#fb8c00] p-3 rounded-xl mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-[#e65100]">Age Matching Game</h2>
                </div>
                
                <p class="text-[#ef6c00] mb-6">Match the age with the correct sentence!</p>
                
                <div class="grid grid-cols-1 gap-3 mb-4" id="age-question-container">
                    <!-- La pregunta se generará con JavaScript -->
                </div>
                
                <div class="grid grid-cols-1 gap-2" id="age-options">
                    <!-- Las opciones se generarán con JavaScript -->
                </div>
                
                <div class="mt-4 text-center">
                    <p id="age-feedback" class="text-[#e65100] font-medium"></p>
                    <p id="age-counter" class="text-sm text-[#fb8c00] mt-2">Correct: 0 | Incorrect: 0</p>
                    <button id="next-age" class="bg-[#fb8c00] hover:bg-[#e65100] text-white font-medium py-2 px-4 rounded-lg mt-3 transition-all hidden">
                        Next Question
                    </button>
                </div>
            </div>
        </div>

        <!-- Sección de Números (conservada) -->
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl p-8 mb-16 animate-fadeInUp" style="animation-delay: 0.4s">
            <div class="flex items-center mb-6">
                <div class="bg-[#e65100] p-3 rounded-xl mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-[#e65100]">Numbers 1-100</h2>
            </div>
            
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-[#fb8c00] mb-3">1-20:</h3>
                <div class="grid grid-cols-4 sm:grid-cols-5 gap-2 text-center">
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">1 - One</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">2 - Two</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">3 - Three</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">4 - Four</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">5 - Five</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">6 - Six</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">7 - Seven</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">8 - Eight</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">9 - Nine</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">10 - Ten</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">11 - Eleven</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">12 - Twelve</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">13 - Thirteen</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">14 - Fourteen</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">15 - Fifteen</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">16 - Sixteen</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">17 - Seventeen</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">18 - Eighteen</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">19 - Nineteen</div>
                    <div class="bg-[#ffe0b2] p-2 rounded-lg border border-[#ffb74d]">20 - Twenty</div>
                </div>
            </div>
            
            <div>
                <h3 class="text-xl font-semibold text-[#fb8c00] mb-3">Tens (20-100):</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2 text-center">
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">20 - Twenty</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">30 - Thirty</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">40 - Forty</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">50 - Fifty</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">60 - Sixty</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">70 - Seventy</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">80 - Eighty</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">90 - Ninety</div>
                    <div class="bg-[#ffcc80] p-2 rounded-lg border border-[#ffb74d]">100 - One hundred</div>
                </div>
            </div>
        </div>
        
        <!-- Sección de Edad (conservada) -->
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl p-8 animate-fadeInUp" style="animation-delay: 0.6s">
            <div class="flex items-center mb-6">
                <div class="bg-[#fb8c00] p-3 rounded-xl mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-[#e65100]">Asking About Age</h2>
            </div>
            
            <div class="space-y-6">
                <div class="bg-[#fff3e0] p-4 rounded-lg border border-[#ffcc80]">
                    <h3 class="text-lg font-semibold text-[#e65100] mb-2">How to ask:</h3>
                    <p class="text-[#ef6c00] font-medium text-xl">"How old are you?"</p>
                    <p class="text-[#fb8c00] text-sm mt-1">(¿Cuántos años tienes?)</p>
                </div>
                
                <div class="bg-[#fff3e0] p-4 rounded-lg border border-[#ffcc80]">
                    <h3 class="text-lg font-semibold text-[#e65100] mb-2">How to answer:</h3>
                    <p class="text-[#ef6c00] font-medium text-xl">"I am [number] years old."</p>
                    <p class="text-[#fb8c00] text-sm mt-1">(Tengo [número] años.)</p>
                </div>
                
                <div class="bg-[#ffcc80] p-4 rounded-lg border border-[#fb8c00]">
                    <h3 class="text-lg font-semibold text-[#e65100] mb-2">Practice:</h3>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button id="random-age" class="bg-[#e65100] hover:bg-[#bf360c] text-white font-medium py-2 px-4 rounded-lg transition-all">
                            Generate Random Age
                        </button>
                        <div class="flex-1 bg-white p-3 rounded-lg border border-[#fb8c00] text-center">
                            <p id="age-display" class="text-[#e65100] font-bold text-lg">Press the button</p>
                        </div>
                    </div>
                    <p id="age-answer" class="text-[#e65100] font-medium mt-3 text-center hidden"></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Elementos decorativos animados -->
    <div class="absolute top-0 left-0 w-32 h-32 bg-[#fb8c00] rounded-full opacity-10 -translate-x-16 -translate-y-16 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-48 h-48 bg-[#e65100] rounded-full opacity-10 translate-x-24 translate-y-24 animate-pulse" style="animation-delay: 0.3s"></div>
    <div class="absolute top-1/4 right-10 w-16 h-16 bg-white rounded-full opacity-20 animate-float"></div>
    <div class="absolute bottom-1/3 left-20 w-24 h-24 bg-[#ef6c00] rounded-full opacity-15 animate-float" style="animation-delay: 0.4s"></div>


    {{-- Enlace al archivo CSS específico del componente --}}
    <link rel="stylesheet" href="{{ asset('css/components/secction-a1/a1-4.css') }}">

    {{-- Enlace al archivo JavaScript específico del componente (si es necesario) --}}
    <script src="{{ asset('js/components/secction-a1/a1-4.js') }}"></script>



</section>





   
   
   
   
   
   
   
   
   
   
   
   
   
   
  