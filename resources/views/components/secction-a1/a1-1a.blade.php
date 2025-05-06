<style>
    .flip-card {
        perspective: 1000px;
        height: 180px; /* Altura fija para todas las tarjetas */
    }
    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.6s;
        transform-style: preserve-3d;
    }
    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }
    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .flip-card-back {
        transform: rotateY(180deg);
    }
</style>

<!-- Interactive Cards Section -->
<section class="mb-12">
    <h2 class="text-2xl font-semibold text-blue-800 mb-6 border-b-2 border-blue-200 pb-2">📌 Flash Cards</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="flip-card">
            <div class="flip-card-inner rounded-lg shadow-lg">
                <div class="flip-card-front bg-white p-6 rounded-lg border-2 border-blue-300">
                    <span class="text-5xl mb-2">👋</span>
                    <h3 class="text-xl font-bold text-blue-700">Hello / Hi</h3>
                </div>
                <div class="flip-card-back bg-blue-100 p-6 rounded-lg border-2 border-blue-400">
                    <p class="text-lg font-medium text-blue-800">¡Hola!</p>
                    <p class="text-sm text-blue-600 mt-2">Informal greeting</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="flip-card">
            <div class="flip-card-inner rounded-lg shadow-lg">
                <div class="flip-card-front bg-white p-6 rounded-lg border-2 border-blue-300">
                    <span class="text-5xl mb-2">🌞</span>
                    <h3 class="text-xl font-bold text-blue-700">Good morning</h3>
                </div>
                <div class="flip-card-back bg-blue-100 p-6 rounded-lg border-2 border-blue-400">
                    <p class="text-lg font-medium text-blue-800">¡Buenos días!</p>
                    <p class="text-sm text-blue-600 mt-2">Used until noon</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="flip-card">
            <div class="flip-card-inner rounded-lg shadow-lg">
                <div class="flip-card-front bg-white p-6 rounded-lg border-2 border-blue-300">
                    <span class="text-5xl mb-2">🌙</span>
                    <h3 class="text-xl font-bold text-blue-700">Good evening</h3>
                </div>
                <div class="flip-card-back bg-blue-100 p-6 rounded-lg border-2 border-blue-400">
                    <p class="text-lg font-medium text-blue-800">¡Buenas noches!</p>
                    <p class="text-sm text-blue-600 mt-2">After 6 PM</p>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="flip-card">
            <div class="flip-card-inner rounded-lg shadow-lg">
                <div class="flip-card-front bg-white p-6 rounded-lg border-2 border-blue-300">
                    <span class="text-5xl mb-2">👋</span>
                    <h3 class="text-xl font-bold text-blue-700">Goodbye / Bye</h3>
                </div>
                <div class="flip-card-back bg-blue-100 p-6 rounded-lg border-2 border-blue-400">
                    <p class="text-lg font-medium text-blue-800">¡Adiós!</p>
                    <p class="text-sm text-blue-600 mt-2">Common farewell</p>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="flip-card">
            <div class="flip-card-inner rounded-lg shadow-lg">
                <div class="flip-card-front bg-white p-6 rounded-lg border-2 border-blue-300">
                    <span class="text-5xl mb-2">🕒</span>
                    <h3 class="text-xl font-bold text-blue-700">See you later</h3>
                </div>
                <div class="flip-card-back bg-blue-100 p-6 rounded-lg border-2 border-blue-400">
                    <p class="text-lg font-medium text-blue-800">¡Hasta luego!</p>
                    <p class="text-sm text-blue-600 mt-2">When you'll meet again</p>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="flip-card">
            <div class="flip-card-inner rounded-lg shadow-lg">
                <div class="flip-card-front bg-white p-6 rounded-lg border-2 border-blue-300">
                    <span class="text-5xl mb-2">😊</span>
                    <h3 class="text-xl font-bold text-blue-700">How are you?</h3>
                </div>
                <div class="flip-card-back bg-blue-100 p-6 rounded-lg border-2 border-blue-400">
                    <p class="text-lg font-medium text-blue-800">¿Cómo estás?</p>
                    <p class="text-sm text-blue-600 mt-2">Responses: I'm fine, thanks / Not bad</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dialogue Section -->
<section class="mb-12">
    <h2 class="text-2xl font-semibold text-blue-800 mb-6 border-b-2 border-blue-200 pb-2">💬 Practice Dialogues</h2>
    
    <!-- Dialogue 1 -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
        <h3 class="text-lg font-medium text-blue-700 mb-4">Morning Conversation</h3>
        <div class="space-y-4 dialogue-container">
            <div class="flex items-start">
                <div class="bg-blue-100 p-3 rounded-lg mr-3">
                    <span class="font-bold text-blue-700">A:</span>
                </div>
                <p class="bg-gray-100 p-3 rounded-lg flex-1">Good morning! How are you today?</p>
            </div>
            
            <div class="flex items-start">
                <div class="bg-green-100 p-3 rounded-lg mr-3">
                    <span class="font-bold text-green-700">B:</span>
                </div>
                <p class="bg-gray-100 p-3 rounded-lg flex-1">I'm fine, thanks! And you?</p>
            </div>
            
            <div class="flex items-start">
                <div class="bg-blue-100 p-3 rounded-lg mr-3">
                    <span class="font-bold text-blue-700">A:</span>
                </div>
                <p class="bg-gray-100 p-3 rounded-lg flex-1">Not bad! See you later!</p>
            </div>
            
            <div class="flex items-start">
                <div class="bg-green-100 p-3 rounded-lg mr-3">
                    <span class="font-bold text-green-700">B:</span>
                </div>
                <p class="bg-gray-100 p-3 rounded-lg flex-1">Goodbye!</p>
            </div>
        </div>
        
        <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition dialogue-btn" data-dialogue="1">
            Show/Hide Translation
        </button>
        
        <div class="dialogue-translation hidden mt-4 bg-yellow-50 p-4 rounded-lg border border-yellow-200" data-dialogue="1">
            <h4 class="font-medium text-yellow-700 mb-2">Translation:</h4>
            <div class="space-y-2">
                <p><span class="font-bold">A:</span> ¡Buenos días! ¿Cómo estás hoy?</p>
                <p><span class="font-bold">B:</span> ¡Estoy bien, gracias! ¿Y tú?</p>
                <p><span class="font-bold">A:</span> ¡No está mal! ¡Hasta luego!</p>
                <p><span class="font-bold">B:</span> ¡Adiós!</p>
            </div>
        </div>
    </div>
    
    <!-- Dialogue 2 -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
        <h3 class="text-lg font-medium text-blue-700 mb-4">Evening Conversation</h3>
        <div class="space-y-4 dialogue-container">
            <div class="flex items-start">
                <div class="bg-blue-100 p-3 rounded-lg mr-3">
                    <span class="font-bold text-blue-700">A:</span>
                </div>
                <p class="bg-gray-100 p-3 rounded-lg flex-1">Good evening! How was your day?</p>
            </div>
            
            <div class="flex items-start">
                <div class="bg-green-100 p-3 rounded-lg mr-3">
                    <span class="font-bold text-green-700">B:</span>
                </div>
                <p class="bg-gray-100 p-3 rounded-lg flex-1">It was great, thank you! How about you?</p>
            </div>
            
            <div class="flex items-start">
                <div class="bg-blue-100 p-3 rounded-lg mr-3">
                    <span class="font-bold text-blue-700">A:</span>
                </div>
                <p class="bg-gray-100 p-3 rounded-lg flex-1">Pretty good! Have a nice night!</p>
            </div>
            
            <div class="flex items-start">
                <div class="bg-green-100 p-3 rounded-lg mr-3">
                    <span class="font-bold text-green-700">B:</span>
                </div>
                <p class="bg-gray-100 p-3 rounded-lg flex-1">You too! Goodnight!</p>
            </div>
        </div>
        
        <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition dialogue-btn" data-dialogue="2">
            Show/Hide Translation
        </button>
        
        <div class="dialogue-translation hidden mt-4 bg-yellow-50 p-4 rounded-lg border border-yellow-200" data-dialogue="2">
            <h4 class="font-medium text-yellow-700 mb-2">Translation:</h4>
            <div class="space-y-2">
                <p><span class="font-bold">A:</span> ¡Buenas noches! ¿Cómo estuvo tu día?</p>
                <p><span class="font-bold">B:</span> ¡Estuvo genial, gracias! ¿Y el tuyo?</p>
                <p><span class="font-bold">A:</span> ¡Bastante bien! ¡Que tengas una buena noche!</p>
                <p><span class="font-bold">B:</span> ¡Igualmente! ¡Buenas noches!</p>
            </div>
        </div>
    </div>
    
    <!-- Dialogue 3 -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-lg font-medium text-blue-700 mb-4">Casual Meeting</h3>
        <div class="space-y-4 dialogue-container">
            <div class="flex items-start">
                <div class="bg-blue-100 p-3 rounded-lg mr-3">
                    <span class="font-bold text-blue-700">A:</span>
                </div>
                <p class="bg-gray-100 p-3 rounded-lg flex-1">Hi there! Long time no see!</p>
            </div>
            
            <div class="flex items-start">
                <div class="bg-green-100 p-3 rounded-lg mr-3">
                    <span class="font-bold text-green-700">B:</span>
                </div>
                <p class="bg-gray-100 p-3 rounded-lg flex-1">Hello! Yes, it's been a while! How have you been?</p>
            </div>
            
            <div class="flex items-start">
                <div class="bg-blue-100 p-3 rounded-lg mr-3">
                    <span class="font-bold text-blue-700">A:</span>
                </div>
                <p class="bg-gray-100 p-3 rounded-lg flex-1">I've been busy but good. We should meet for coffee soon!</p>
            </div>
            
            <div class="flex items-start">
                <div class="bg-green-100 p-3 rounded-lg mr-3">
                    <span class="font-bold text-green-700">B:</span>
                </div>
                <p class="bg-gray-100 p-3 rounded-lg flex-1">That sounds great! See you soon!</p>
            </div>
        </div>
        
        <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition dialogue-btn" data-dialogue="3">
            Show/Hide Translation
        </button>
        
        <div class="dialogue-translation hidden mt-4 bg-yellow-50 p-4 rounded-lg border border-yellow-200" data-dialogue="3">
            <h4 class="font-medium text-yellow-700 mb-2">Translation:</h4>
            <div class="space-y-2">
                <p><span class="font-bold">A:</span> ¡Hola! ¡Mucho tiempo sin verte!</p>
                <p><span class="font-bold">B:</span> ¡Hola! ¡Sí, ha pasado tiempo! ¿Cómo has estado?</p>
                <p><span class="font-bold">A:</span> He estado ocupado pero bien. ¡Deberíamos tomar un café pronto!</p>
                <p><span class="font-bold">B:</span> ¡Suena genial! ¡Nos vemos pronto!</p>
            </div>
        </div>
    </div>
    
    <!-- Practice Instructions -->
    <div class="mt-8 bg-blue-50 p-6 rounded-lg border border-blue-200">
        <h3 class="text-xl font-medium text-blue-700 mb-3">Practice Time!</h3>
        <ol class="list-decimal pl-5 space-y-2 text-blue-800">
            <li>Read the dialogues aloud with a partner</li>
            <li>Try changing the words using the greetings from the flashcards</li>
            <li>Create your own dialogues for different situations</li>
            <li>Practice at different times of day (morning, afternoon, evening)</li>
            <li>Record yourself and listen to your pronunciation</li>
        </ol>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle dialogue translations
        const dialogueBtns = document.querySelectorAll('.dialogue-btn');
        
        dialogueBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const dialogueId = this.getAttribute('data-dialogue');
                const translation = document.querySelector(`.dialogue-translation[data-dialogue="${dialogueId}"]`);
                
                translation.classList.toggle('hidden');
                
                if (translation.classList.contains('hidden')) {
                    this.textContent = 'Show Translation';
                } else {
                    this.textContent = 'Hide Translation';
                }
            });
        });
        
        // Flip cards animation improvement
        const flipCards = document.querySelectorAll('.flip-card');
        
        flipCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.querySelector('.flip-card-inner').style.transform = 'rotateY(180deg)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.querySelector('.flip-card-inner').style.transform = 'rotateY(0deg)';
            });
        });
    });
</script>