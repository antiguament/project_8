










































<section id="articles" class="bg-gradient-to-br from-[#dcedc8] to-[#aed581] py-16 md:py-24 lg:py-32 relative overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 mb-12 md:mb-0">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#558b2f] mb-6 animate-fadeInLeft" style="animation-delay: 0.2s;">
                    Los Artículos en Inglés: A, An, The 📚
                </h2>
                <p class="text-lg md:text-xl text-[#689f38] mb-8 animate-fadeInLeft" style="animation-delay: 0.4s;">
                    En esta lección, aprenderemos a usar los artículos "a", "an" y "the" en inglés. ¡Son pequeñas palabras con grandes reglas!
                </p>
                <div class="space-y-6 animate-fadeInLeft" style="animation-delay: 0.6s;">
                    <div>
                        <h3 class="text-xl font-semibold text-[#8bc34a] mb-2">El Artículo Indefinido: "A"</h3>
                        <p class="text-[#558b2f] mb-2">Usamos "a" antes de sustantivos singulares que comienzan con un sonido de consonante.</p>
                        <ul class="list-disc list-inside text-[#689f38]">
                            <li><span class="font-bold">a</span> book (un libro)</li>
                            <li><span class="font-bold">a</span> cat (un gato)</li>
                            <li><span class="font-bold">a</span> table (una mesa)</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-[#8bc34a] mb-2">El Artículo Indefinido: "An"</h3>
                        <p class="text-[#558b2f] mb-2">Usamos "an" antes de sustantivos singulares que comienzan con un sonido de vocal.</p>
                        <ul class="list-disc list-inside text-[#689f38]">
                            <li><span class="font-bold">an</span> apple (una manzana)</li>
                            <li><span class="font-bold">an</span> elephant (un elefante)</li>
                            <li><span class="font-bold">an</span> hour (una hora) <span class="text-sm italic">(la "h" es muda)</span></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-[#8bc34a] mb-2">El Artículo Definido: "The"</h3>
                        <p class="text-[#558b2f] mb-2">Usamos "the" cuando hablamos de algo específico o algo que ya hemos mencionado.</p>
                        <ul class="list-disc list-inside text-[#689f38]">
                            <li><span class="font-bold">the</span> book (el libro / la libro - un libro específico)</li>
                            <li><span class="font-bold">the</span> sun (el sol - solo hay uno)</li>
                            <li>This is <span class="font-bold">a</span> book. <span class="font-bold">The</span> book is blue. (Este es un libro. El libro es azul.)</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-[#8bc34a] mb-2">Frase Clave:</h3>
                        <p class="text-[#558b2f]"><span class="font-bold">"This is a book. The book is blue."</span></p>
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 flex justify-center animate-fadeInRight" style="animation-delay: 0.5s;">
                <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YXJ0aWNsZXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Libros apilados" class="rounded-lg shadow-lg max-w-md">
            </div>
        </div>

        <div class="mt-16 bg-white rounded-lg shadow-md p-8 animate-fadeInUp" style="animation-delay: 0.8s;">
            <h2 class="text-2xl font-semibold text-[#558b2f] mb-6 text-center">¡Practiquemos!</h2>
            <p class="text-lg text-[#689f38] text-center mb-4">Completa las siguientes oraciones con "a", "an" o "the":</p>
            <ul class="list-none space-y-2 text-[#558b2f]">
                <li class="font-semibold">___ cat is sleeping.</li>
                <li class="font-semibold">I have ___ apple.</li>
                <li class="font-semibold">Look at ___ moon!</li>
            </ul>
            <p class="mt-4 text-sm text-gray-500 text-center">(Respuestas: The, an, the)</p>
        </div>
    </div>

    <div class="absolute top-0 left-0 w-40 h-40 bg-[#8bc34a] rounded-full opacity-10 -translate-x-20 -translate-y-20"></div>
    <div class="absolute bottom-0 right-0 w-60 h-60 bg-[#689f38] rounded-full opacity-10 translate-x-32 translate-y-32"></div>
</section>

<style>
    /* Estilos para las animaciones */
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeInLeft {
        animation: fadeInLeft 0.6s ease-out forwards;
    }

    .animate-fadeInRight {
        animation: fadeInRight 0.6s ease-out forwards;
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.6s ease-out forwards;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInLeft', 'animate-fadeInRight', 'animate-fadeInUp');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('#articles [class*="animate-"]').forEach(el => {
            observer.observe(el);
        });
    });
</script>




<section id="article-games" class="bg-gradient-to-br from-[#ffecb3] to-[#ffd54f] py-16 md:py-24 lg:py-32 relative overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12 animate-fadeInDown" style="animation-delay: 0.2s;">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#ff8f00]">¡Aprende los Artículos Jugando! 🎮</h2>
            <p class="text-lg md:text-xl text-[#ffa000]">Diviértete mientras dominas "a", "an" y "the"</p>
        </div>

        <!-- Juego 1: Clasificación Rápida -->
        <div class="bg-white rounded-xl shadow-2xl p-8 mb-16 animate-fadeInUp" style="animation-delay: 0.3s;">
            <h3 class="text-2xl font-bold text-[#ff8f00] mb-6 text-center">🏆 Juego 1: Clasificación Veloz</h3>
            <p class="text-lg text-[#ffa000] mb-6 text-center">Arrastra cada palabra al artículo correcto. ¡Tienes 60 segundos!</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div id="a-box" class="bg-[#fff8e1] p-4 rounded-lg min-h-40 border-2 border-dashed border-[#ffb300]">
                    <h4 class="text-center font-bold text-[#ff8f00] mb-2">A</h4>
                    <div class="flex flex-wrap gap-2" id="a-words"></div>
                </div>
                <div id="an-box" class="bg-[#fff8e1] p-4 rounded-lg min-h-40 border-2 border-dashed border-[#ffb300]">
                    <h4 class="text-center font-bold text-[#ff8f00] mb-2">An</h4>
                    <div class="flex flex-wrap gap-2" id="an-words"></div>
                </div>
                <div id="the-box" class="bg-[#fff8e1] p-4 rounded-lg min-h-40 border-2 border-dashed border-[#ffb300]">
                    <h4 class="text-center font-bold text-[#ff8f00] mb-2">The</h4>
                    <div class="flex flex-wrap gap-2" id="the-words"></div>
                </div>
            </div>
            
            <div class="flex flex-wrap gap-3 justify-center" id="word-pool">
                <!-- Palabras se generarán con JavaScript -->
            </div>
            
            <div class="flex justify-between items-center mt-6">
                <div class="text-lg font-semibold text-[#ff8f00]">Tiempo: <span id="timer">60</span>s</div>
                <button id="start-game" class="bg-[#ffb300] hover:bg-[#ffa000] text-black font-bold py-2 px-6 rounded-full transition-all">
                    ¡Comenzar!
                </button>
                <div class="text-lg font-semibold text-[#ff8f00]">Puntaje: <span id="score">0</span></div>
            </div>
        </div>

        <!-- Juego 2: Completa la Frase -->
        <div class="bg-white rounded-xl shadow-2xl p-8 animate-fadeInUp" style="animation-delay: 0.5s;">
            <h3 class="text-2xl font-bold text-[#ff8f00] mb-6 text-center">🧩 Juego 2: Completa la Frase</h3>
            <p class="text-lg text-[#ffa000] mb-6 text-center">Elige el artículo correcto para cada oración.</p>
            
            <div class="space-y-6" id="sentence-game">
                <div class="bg-[#fff8e1] p-4 rounded-lg">
                    <p class="text-lg text-[#ff8f00] mb-2">I saw ___ elephant at ___ zoo yesterday. ___ elephant was huge!</p>
                    <div class="flex gap-4 flex-wrap">
                        <button class="article-option bg-[#ffb300] hover:bg-[#ffa000] text-white font-bold py-2 px-4 rounded transition-all" data-correct="an">an</button>
                        <button class="article-option bg-[#ffb300] hover:bg-[#ffa000] text-white font-bold py-2 px-4 rounded transition-all" data-correct="the">the</button>
                        <button class="article-option bg-[#ffb300] hover:bg-[#ffa000] text-white font-bold py-2 px-4 rounded transition-all" data-correct="the">the</button>
                    </div>
                </div>
                
                <div class="bg-[#fff8e1] p-4 rounded-lg">
                    <p class="text-lg text-[#ff8f00] mb-2">She is ___ honest person and works as ___ doctor at ___ local hospital.</p>
                    <div class="flex gap-4 flex-wrap">
                        <button class="article-option bg-[#ffb300] hover:bg-[#ffa000] text-white font-bold py-2 px-4 rounded transition-all" data-correct="an">an</button>
                        <button class="article-option bg-[#ffb300] hover:bg-[#ffa000] text-white font-bold py-2 px-4 rounded transition-all" data-correct="a">a</button>
                        <button class="article-option bg-[#ffb300] hover:bg-[#ffa000] text-white font-bold py-2 px-4 rounded transition-all" data-correct="the">the</button>
                    </div>
                </div>
                
                <div class="bg-[#fff8e1] p-4 rounded-lg">
                    <p class="text-lg text-[#ff8f00] mb-2">Can you pass me ___ book? ___ book on ___ table, please.</p>
                    <div class="flex gap-4 flex-wrap">
                        <button class="article-option bg-[#ffb300] hover:bg-[#ffa000] text-white font-bold py-2 px-4 rounded transition-all" data-correct="the">the</button>
                        <button class="article-option bg-[#ffb300] hover:bg-[#ffa000] text-white font-bold py-2 px-4 rounded transition-all" data-correct="the">the</button>
                        <button class="article-option bg-[#ffb300] hover:bg-[#ffa000] text-white font-bold py-2 px-4 rounded transition-all" data-correct="the">the</button>
                    </div>
                </div>
            </div>
            
            <div class="mt-6 text-center">
                <button id="check-answers" class="bg-[#ff8f00] hover:bg-[#ff6f00] text-black font-bold py-3 px-8 rounded-full transition-all">
                    Verificar Respuestas
                </button>
                <p id="feedback" class="mt-4 text-lg font-semibold text-[#ff8f00] hidden"></p>
            </div>
        </div>
    </div>

    <div class="absolute top-0 left-0 w-40 h-40 bg-[#ffb300] rounded-full opacity-10 -translate-x-20 -translate-y-20"></div>
    <div class="absolute bottom-0 right-0 w-60 h-60 bg-[#ff8f00] rounded-full opacity-10 translate-x-32 translate-y-32"></div>
</section>

<style>
    /* Estilos para las animaciones */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeInDown {
        animation: fadeInDown 0.6s ease-out forwards;
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.6s ease-out forwards;
    }

    /* Estilos para los juegos */
    .word-chip {
        background-color: #ffd54f;
        color: #ff6f00;
        padding: 6px 12px;
        border-radius: 20px;
        cursor: grab;
        user-select: none;
        transition: all 0.3s;
    }

    .word-chip:hover {
        background-color: #ffb300;
        transform: scale(1.05);
    }

    .word-chip.dragging {
        opacity: 0.8;
        transform: scale(1.1);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Juego 1: Clasificación Rápida
        const words = [
            {word: "apple", article: "an"},
            {word: "book", article: "a"},
            {word: "umbrella", article: "an"},
            {word: "car", article: "a"},
            {word: "hour", article: "an"},
            {word: "university", article: "a"},
            {word: "orange", article: "an"},
            {word: "dog", article: "a"},
            {word: "honest person", article: "an"},
            {word: "European", article: "a"},
            {word: "idea", article: "an"},
            {word: "table", article: "a"}
        ];

        const wordPool = document.getElementById('word-pool');
        const aBox = document.getElementById('a-box');
        const anBox = document.getElementById('an-box');
        const theBox = document.getElementById('the-box');
        const startButton = document.getElementById('start-game');
        const timerDisplay = document.getElementById('timer');
        const scoreDisplay = document.getElementById('score');

        let timeLeft = 60;
        let score = 0;
        let timer;
        let gameStarted = false;

        function createWordChips() {
            wordPool.innerHTML = '';
            document.getElementById('a-words').innerHTML = '';
            document.getElementById('an-words').innerHTML = '';
            document.getElementById('the-words').innerHTML = '';
            
            // Mezclar las palabras
            const shuffledWords = [...words].sort(() => Math.random() - 0.5);
            
            shuffledWords.forEach(wordObj => {
                const chip = document.createElement('div');
                chip.className = 'word-chip';
                chip.textContent = wordObj.word;
                chip.dataset.article = wordObj.article;
                chip.draggable = true;
                
                chip.addEventListener('dragstart', function(e) {
                    this.classList.add('dragging');
                    e.dataTransfer.setData('text/plain', this.textContent);
                    e.dataTransfer.setData('article', this.dataset.article);
                });
                
                chip.addEventListener('dragend', function() {
                    this.classList.remove('dragging');
                });
                
                wordPool.appendChild(chip);
            });
        }

        function setupDropZones() {
            [aBox, anBox, theBox].forEach(box => {
                box.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    this.style.backgroundColor = '#ffecb3';
                });
                
                box.addEventListener('dragleave', function() {
                    this.style.backgroundColor = '#fff8e1';
                });
                
                box.addEventListener('drop', function(e) {
                    e.preventDefault();
                    this.style.backgroundColor = '#fff8e1';
                    
                    const word = e.dataTransfer.getData('text/plain');
                    const article = e.dataTransfer.getData('article');
                    const targetArticle = this.querySelector('h4').textContent.toLowerCase();
                    
                    if (gameStarted) {
                        const chip = document.createElement('div');
                        chip.className = 'word-chip';
                        chip.textContent = word;
                        
                        if (article === targetArticle) {
                            score++;
                            scoreDisplay.textContent = score;
                            chip.style.backgroundColor = '#aed581';
                        } else {
                            chip.style.backgroundColor = '#ef9a9a';
                        }
                        
                        this.querySelector('div').appendChild(chip);
                        
                        // Eliminar la palabra del pool
                        const chips = document.querySelectorAll('.word-chip');
                        chips.forEach(c => {
                            if (c.textContent === word && c.parentElement === wordPool) {
                                c.remove();
                            }
                        });
                        
                        // Verificar si el juego terminó
                        if (document.querySelectorAll('#word-pool .word-chip').length === 0) {
                            endGame();
                        }
                    }
                });
            });
        }

        function startGame() {
            if (gameStarted) return;
            
            gameStarted = true;
            score = 0;
            scoreDisplay.textContent = score;
            timeLeft = 60;
            timerDisplay.textContent = timeLeft;
            
            createWordChips();
            
            timer = setInterval(() => {
                timeLeft--;
                timerDisplay.textContent = timeLeft;
                
                if (timeLeft <= 0) {
                    endGame();
                }
            }, 1000);
            
            startButton.textContent = 'Juego en curso...';
            startButton.disabled = true;
        }

        function endGame() {
            clearInterval(timer);
            gameStarted = false;
            startButton.textContent = '¡Jugar de nuevo!';
            startButton.disabled = false;
            
            // Mostrar resultados
            alert(`¡Juego terminado! Puntaje: ${score}/${words.length}`);
        }

        startButton.addEventListener('click', startGame);
        setupDropZones();

        // Juego 2: Completa la Frase
        const checkAnswersButton = document.getElementById('check-answers');
        const feedbackElement = document.getElementById('feedback');
        const options = document.querySelectorAll('.article-option');

        let selectedOptions = [];

        options.forEach(option => {
            option.addEventListener('click', function() {
                // Remover selección previa en el mismo grupo
                const parent = this.parentElement;
                parent.querySelectorAll('.article-option').forEach(btn => {
                    btn.classList.remove('bg-[#ff8f00]', 'text-white');
                    btn.classList.add('bg-[#ffb300]');
                });
                
                // Seleccionar esta opción
                this.classList.remove('bg-[#ffb300]');
                this.classList.add('bg-[#ff8f00]');
                
                // Guardar selección
                const questionIndex = Array.from(document.querySelectorAll('#sentence-game > div')).indexOf(parent.parentElement);
                selectedOptions[questionIndex] = this;
            });
        });

        checkAnswersButton.addEventListener('click', function() {
            let correctAnswers = 0;
            const totalQuestions = document.querySelectorAll('#sentence-game > div').length;
            
            selectedOptions.forEach((option, index) => {
                if (option && option.dataset.correct === option.textContent) {
                    correctAnswers++;
                    option.classList.remove('bg-[#ff8f00]');
                    option.classList.add('bg-[#aed581]');
                } else if (option) {
                    option.classList.remove('bg-[#ff8f00]');
                    option.classList.add('bg-[#ef9a9a]');
                    
                    // Mostrar la respuesta correcta
                    const correctOption = Array.from(option.parentElement.children).find(
                        btn => btn.dataset.correct === btn.textContent
                    );
                    correctOption.classList.add('bg-[#aed581]');
                }
            });
            
            feedbackElement.textContent = `Obtuviste ${correctAnswers} de ${totalQuestions} correctas!`;
            feedbackElement.classList.remove('hidden');
        });
    });
</script>









<section id="article-game" class="article-game-section">
    <div class="container">
        <h2 class="game-title">Juego de Artículos en Inglés</h2>
        
        <div class="game-intro">
            <p>Completa cada oración seleccionando el artículo correcto: <strong>a</strong>, <strong>an</strong> o <strong>the</strong>.</p>
        </div>
        
        <div class="progress-container">
            <div class="progress-bar" id="progress"></div>
        </div>
        
        <div class="score-board">
            <div>Pregunta: <span id="question-count">1</span>/10</div>
            <div>Puntaje: <span id="score">0</span></div>
        </div>
        
        <div class="game-area">
            <div class="sentence" id="sentence"></div>
            
            <div class="feedback" id="feedback"></div>
            
            <div class="options" id="options"></div>
            
            <button class="next-btn" id="next-btn">Siguiente</button>
        </div>
        
        <div class="game-over" id="game-over">
            <h3>¡Juego Terminado!</h3>
            <p>Tu puntaje final: <span id="final-score">0</span>/10</p>
            <button class="restart-btn" id="restart-btn">Jugar de nuevo</button>
        </div>
    </div>

    <style>
        .article-game-section {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 2rem;
            width: 100%;
            box-sizing: border-box;
        }
        
        .article-game-section .container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .article-game-section .game-title {
            color: #3a4a6d;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
        }
        
        .article-game-section .game-intro {
            margin-bottom: 1.5rem;
            color: #555;
            line-height: 1.6;
        }
        
        .article-game-section .game-area {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .article-game-section .sentence {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            padding: 1rem;
            background-color: #f8f9fa;
            border-radius: 10px;
            width: 100%;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .article-game-section .blank {
            display: inline-block;
            width: 60px;
            height: 40px;
            border-bottom: 2px solid #3a4a6d;
            margin: 0 5px;
            position: relative;
        }
        
        .article-game-section .options {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }
        
        .article-game-section .option {
            background-color: #4e7cff;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .article-game-section .option:hover {
            background-color: #3a6bff;
            transform: translateY(-2px);
        }
        
        .article-game-section .score-board {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 1rem;
            font-size: 1rem;
            color: #555;
        }
        
        .article-game-section .feedback {
            min-height: 50px;
            font-size: 1rem;
            margin: 1rem 0;
            font-weight: bold;
            padding: 0.5rem;
            border-radius: 5px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .article-game-section .feedback.show {
            opacity: 1;
        }
        
        .article-game-section .correct {
            color: #28a745;
            background-color: rgba(40, 167, 69, 0.1);
        }
        
        .article-game-section .incorrect {
            color: #dc3545;
            background-color: rgba(220, 53, 69, 0.1);
        }
        
        .article-game-section .next-btn {
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.6rem 1.2rem;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            display: none;
        }
        
        .article-game-section .next-btn:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }
        
        .article-game-section .progress-container {
            width: 100%;
            background-color: #e9ecef;
            border-radius: 10px;
            margin-bottom: 1rem;
            height: 10px;
        }
        
        .article-game-section .progress-bar {
            height: 100%;
            border-radius: 10px;
            background-color: #4e7cff;
            width: 0%;
            transition: width 0.5s;
        }
        
        .article-game-section .game-over {
            display: none;
            flex-direction: column;
            align-items: center;
        }
        
        .article-game-section .restart-btn {
            background-color: #ffc107;
            color: #212529;
            border: none;
            border-radius: 8px;
            padding: 0.6rem 1.2rem;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 1rem;
        }
        
        .article-game-section .restart-btn:hover {
            background-color: #e0a800;
            transform: translateY(-2px);
        }
        
        @media (max-width: 600px) {
            .article-game-section .container {
                padding: 1rem;
            }
            
            .article-game-section .game-title {
                font-size: 1.5rem;
            }
            
            .article-game-section .sentence {
                font-size: 1.1rem;
            }
            
            .article-game-section .option {
                padding: 0.4rem 0.8rem;
                font-size: 0.9rem;
            }
        }
    </style>

    <script>
        // Datos del juego
        const questions = [
            {
                sentence: "I saw ___ elephant at the zoo.",
                blankIndex: 2,
                options: ["a", "an", "the"],
                correct: "an"
            },
            {
                sentence: "She is ___ honest person.",
                blankIndex: 2,
                options: ["a", "an", "the"],
                correct: "an"
            },
            {
                sentence: "Can you pass me ___ book?",
                blankIndex: 3,
                options: ["a", "an", "the"],
                correct: "the"
            },
            {
                sentence: "He wants to be ___ astronaut when he grows up.",
                blankIndex: 4,
                options: ["a", "an", "the"],
                correct: "an"
            },
            {
                sentence: "___ sun is shining brightly today.",
                blankIndex: 0,
                options: ["A", "An", "The"],
                correct: "The"
            },
            {
                sentence: "I need ___ hour to finish this work.",
                blankIndex: 2,
                options: ["a", "an", "the"],
                correct: "an"
            },
            {
                sentence: "This is ___ best movie I've ever seen.",
                blankIndex: 2,
                options: ["a", "an", "the"],
                correct: "the"
            },
            {
                sentence: "She has ___ university degree in biology.",
                blankIndex: 2,
                options: ["a", "an", "the"],
                correct: "a"
            },
            {
                sentence: "Look at ___ moon! It's full tonight.",
                blankIndex: 2,
                options: ["a", "an", "the"],
                correct: "the"
            },
            {
                sentence: "He's ___ European diplomat.",
                blankIndex: 2,
                options: ["a", "an", "the"],
                correct: "a"
            }
        ];

        // Variables del juego
        let currentQuestion = 0;
        let score = 0;
        let gameActive = true;

        // Inicializar el juego cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', function() {
            // Elementos del DOM
            const sentenceElement = document.getElementById('sentence');
            const optionsElement = document.getElementById('options');
            const feedbackElement = document.getElementById('feedback');
            const nextButton = document.getElementById('next-btn');
            const questionCountElement = document.getElementById('question-count');
            const scoreElement = document.getElementById('score');
            const progressBar = document.getElementById('progress');
            const gameOverElement = document.getElementById('game-over');
            const finalScoreElement = document.getElementById('final-score');
            const restartButton = document.getElementById('restart-btn');

            // Inicializar el juego
            function initGame() {
                currentQuestion = 0;
                score = 0;
                gameActive = true;
                scoreElement.textContent = score;
                questionCountElement.textContent = currentQuestion + 1;
                progressBar.style.width = '0%';
                gameOverElement.style.display = 'none';
                document.querySelector('.game-area').style.display = 'flex';
                loadQuestion();
            }

            // Cargar pregunta
            function loadQuestion() {
                if (currentQuestion >= questions.length) {
                    endGame();
                    return;
                }

                const question = questions[currentQuestion];
                const sentenceParts = question.sentence.split('___');
                
                sentenceElement.innerHTML = '';
                
                // Construir la oración con el espacio en blanco
                sentenceParts.forEach((part, index) => {
                    sentenceElement.appendChild(document.createTextNode(part));
                    if (index < sentenceParts.length - 1) {
                        const blankSpan = document.createElement('span');
                        blankSpan.className = 'blank';
                        blankSpan.id = 'blank';
                        sentenceElement.appendChild(blankSpan);
                    }
                });

                // Cargar opciones
                optionsElement.innerHTML = '';
                question.options.forEach(option => {
                    const button = document.createElement('button');
                    button.className = 'option';
                    button.textContent = option;
                    button.addEventListener('click', () => selectOption(option));
                    optionsElement.appendChild(button);
                });

                // Resetear feedback y botón siguiente
                feedbackElement.textContent = '';
                feedbackElement.className = 'feedback';
                feedbackElement.classList.remove('show');
                nextButton.style.display = 'none';
            }

            // Seleccionar opción
            function selectOption(selectedOption) {
                if (!gameActive) return;

                const question = questions[currentQuestion];
                const blank = document.getElementById('blank');
                
                // Mostrar la respuesta seleccionada en el espacio en blanco
                blank.textContent = selectedOption;
                
                // Deshabilitar todos los botones de opción
                const optionButtons = document.querySelectorAll('.option');
                optionButtons.forEach(button => {
                    button.disabled = true;
                });

                // Verificar respuesta
                if (selectedOption === question.correct) {
                    feedbackElement.textContent = '¡Correcto!';
                    feedbackElement.className = 'feedback correct';
                    blank.style.color = '#28a745';
                    score++;
                    scoreElement.textContent = score;
                } else {
                    feedbackElement.textContent = `Incorrecto. La respuesta correcta es "${question.correct}".`;
                    feedbackElement.className = 'feedback incorrect';
                    blank.style.color = '#dc3545';
                }

                // Mostrar feedback con animación
                feedbackElement.classList.add('show');
                
                // Mostrar botón siguiente
                nextButton.style.display = 'block';
                gameActive = false;
            }

            // Siguiente pregunta
            nextButton.addEventListener('click', () => {
                currentQuestion++;
                questionCountElement.textContent = currentQuestion + 1;
                progressBar.style.width = `${(currentQuestion / questions.length) * 100}%`;
                gameActive = true;
                loadQuestion();
            });

            // Finalizar juego
            function endGame() {
                document.querySelector('.game-area').style.display = 'none';
                gameOverElement.style.display = 'flex';
                finalScoreElement.textContent = score;
            }

            // Reiniciar juego
            restartButton.addEventListener('click', initGame);

            // Iniciar el juego
            initGame();
        });
    </script>
</section>



















