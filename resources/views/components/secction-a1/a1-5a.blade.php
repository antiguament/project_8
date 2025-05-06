<section id="to-be-game" class="to-be-game-section">
    <div class="container">
        <h2 class="game-title">Juego del Verbo "To Be"</h2>
        
        <div class="game-intro">
            <p>Completa cada oración con la forma correcta del verbo <strong>to be</strong> (am, is, are).</p>
        </div>
        
        <div class="progress-container">
            <div class="progress-bar" id="progress-to-be"></div>
        </div>
        
        <div class="score-board">
            <div>Pregunta: <span id="question-count-to-be">1</span>/10</div>
            <div>Puntaje: <span id="score-to-be">0</span></div>
        </div>
        
        <div class="game-area">
            <div class="sentence" id="sentence-to-be"></div>
            
            <div class="feedback" id="feedback-to-be"></div>
            
            <div class="options" id="options-to-be"></div>
            
            <button class="next-btn" id="next-btn-to-be">Siguiente</button>
        </div>
        
        <div class="game-over" id="game-over-to-be">
            <h3>¡Juego Terminado!</h3>
            <p>Tu puntaje final: <span id="final-score-to-be">0</span>/10</p>
            <button class="restart-btn" id="restart-btn-to-be">Jugar de nuevo</button>
        </div>
    </div>

    <style>
        .to-be-game-section {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fff5f5 0%, #ffd6d6 100%);
            padding: 2rem;
            width: 100%;
            box-sizing: border-box;
            border-radius: 15px;
            margin: 20px 0;
        }
        
        .to-be-game-section .container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .to-be-game-section .game-title {
            color: #d23669;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
        }
        
        .to-be-game-section .game-intro {
            margin-bottom: 1.5rem;
            color: #555;
            line-height: 1.6;
        }
        
        .to-be-game-section .game-area {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .to-be-game-section .sentence {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            padding: 1rem;
            background-color: #fff9f9;
            border-radius: 10px;
            width: 100%;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            border: 1px solid #ffebee;
        }
        
        .to-be-game-section .blank {
            display: inline-block;
            width: 60px;
            height: 40px;
            border-bottom: 2px solid #d23669;
            margin: 0 5px;
            position: relative;
        }
        
        .to-be-game-section .options {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }
        
        .to-be-game-section .option {
            background-color: #ff6b81;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .to-be-game-section .option:hover {
            background-color: #d23669;
            transform: translateY(-2px);
        }
        
        .to-be-game-section .score-board {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 1rem;
            font-size: 1rem;
            color: #555;
        }
        
        .to-be-game-section .feedback {
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
            background-color: #fff5f5;
        }
        
        .to-be-game-section .feedback.show {
            opacity: 1;
        }
        
        .to-be-game-section .correct {
            color: #28a745;
            border: 1px solid #28a745;
        }
        
        .to-be-game-section .incorrect {
            color: #dc3545;
            border: 1px solid #dc3545;
        }
        
        .to-be-game-section .next-btn {
            background-color: #ff6b81;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.6rem 1.2rem;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            display: none;
        }
        
        .to-be-game-section .next-btn:hover {
            background-color: #d23669;
            transform: translateY(-2px);
        }
        
        .to-be-game-section .progress-container {
            width: 100%;
            background-color: #ffebee;
            border-radius: 10px;
            margin-bottom: 1rem;
            height: 10px;
        }
        
        .to-be-game-section .progress-bar {
            height: 100%;
            border-radius: 10px;
            background-color: #ff6b81;
            width: 0%;
            transition: width 0.5s;
        }
        
        .to-be-game-section .game-over {
            display: none;
            flex-direction: column;
            align-items: center;
            padding: 1rem;
            background-color: #fff9f9;
            border-radius: 10px;
            margin-top: 1rem;
        }
        
        .to-be-game-section .restart-btn {
            background-color: #ff9e80;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.6rem 1.2rem;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 1rem;
        }
        
        .to-be-game-section .restart-btn:hover {
            background-color: #ff7043;
            transform: translateY(-2px);
        }
        
        @media (max-width: 600px) {
            .to-be-game-section .container {
                padding: 1rem;
            }
            
            .to-be-game-section .game-title {
                font-size: 1.5rem;
            }
            
            .to-be-game-section .sentence {
                font-size: 1.1rem;
            }
            
            .to-be-game-section .option {
                padding: 0.4rem 0.8rem;
                font-size: 0.9rem;
            }
        }
    </style>

    <script>
        // Datos del juego para el verbo to be
        const questionsToBe = [
            {
                sentence: "I ___ a student.",
                blankIndex: 1,
                options: ["am", "is", "are"],
                correct: "am"
            },
            {
                sentence: "She ___ my best friend.",
                blankIndex: 1,
                options: ["am", "is", "are"],
                correct: "is"
            },
            {
                sentence: "They ___ playing football.",
                blankIndex: 1,
                options: ["am", "is", "are"],
                correct: "are"
            },
            {
                sentence: "We ___ very happy today.",
                blankIndex: 1,
                options: ["am", "is", "are"],
                correct: "are"
            },
            {
                sentence: "He ___ not at home right now.",
                blankIndex: 1,
                options: ["am", "is", "are"],
                correct: "is"
            },
            {
                sentence: "You ___ my favorite person.",
                blankIndex: 1,
                options: ["am", "is", "are"],
                correct: "are"
            },
            {
                sentence: "It ___ a beautiful day.",
                blankIndex: 1,
                options: ["am", "is", "are"],
                correct: "is"
            },
            {
                sentence: "The cat ___ sleeping on the sofa.",
                blankIndex: 2,
                options: ["am", "is", "are"],
                correct: "is"
            },
            {
                sentence: "My parents ___ coming to visit us.",
                blankIndex: 2,
                options: ["am", "is", "are"],
                correct: "are"
            },
            {
                sentence: "This book ___ very interesting.",
                blankIndex: 2,
                options: ["am", "is", "are"],
                correct: "is"
            }
        ];

        // Variables del juego
        let currentQuestionToBe = 0;
        let scoreToBe = 0;
        let gameActiveToBe = true;

        // Inicializar el juego cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', function() {
            // Elementos del DOM específicos para este juego
            const sentenceElement = document.getElementById('sentence-to-be');
            const optionsElement = document.getElementById('options-to-be');
            const feedbackElement = document.getElementById('feedback-to-be');
            const nextButton = document.getElementById('next-btn-to-be');
            const questionCountElement = document.getElementById('question-count-to-be');
            const scoreElement = document.getElementById('score-to-be');
            const progressBar = document.getElementById('progress-to-be');
            const gameOverElement = document.getElementById('game-over-to-be');
            const finalScoreElement = document.getElementById('final-score-to-be');
            const restartButton = document.getElementById('restart-btn-to-be');

            // Inicializar el juego
            function initGame() {
                currentQuestionToBe = 0;
                scoreToBe = 0;
                gameActiveToBe = true;
                scoreElement.textContent = scoreToBe;
                questionCountElement.textContent = currentQuestionToBe + 1;
                progressBar.style.width = '0%';
                gameOverElement.style.display = 'none';
                document.querySelector('.game-area').style.display = 'flex';
                loadQuestion();
            }

            // Cargar pregunta
            function loadQuestion() {
                if (currentQuestionToBe >= questionsToBe.length) {
                    endGame();
                    return;
                }

                const question = questionsToBe[currentQuestionToBe];
                const sentenceParts = question.sentence.split('___');
                
                sentenceElement.innerHTML = '';
                
                // Construir la oración con el espacio en blanco
                sentenceParts.forEach((part, index) => {
                    sentenceElement.appendChild(document.createTextNode(part));
                    if (index < sentenceParts.length - 1) {
                        const blankSpan = document.createElement('span');
                        blankSpan.className = 'blank';
                        blankSpan.id = 'blank-to-be';
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
                if (!gameActiveToBe) return;

                const question = questionsToBe[currentQuestionToBe];
                const blank = document.getElementById('blank-to-be');
                
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
                    feedbackElement.className = 'feedback correct show';
                    blank.style.color = '#28a745';
                    scoreToBe++;
                    scoreElement.textContent = scoreToBe;
                } else {
                    feedbackElement.textContent = `Incorrecto. La respuesta correcta es "${question.correct}".`;
                    feedbackElement.className = 'feedback incorrect show';
                    blank.style.color = '#dc3545';
                }

                // Mostrar botón siguiente
                nextButton.style.display = 'block';
                gameActiveToBe = false;
            }

            // Siguiente pregunta
            nextButton.addEventListener('click', () => {
                currentQuestionToBe++;
                questionCountElement.textContent = currentQuestionToBe + 1;
                progressBar.style.width = `${(currentQuestionToBe / questionsToBe.length) * 100}%`;
                gameActiveToBe = true;
                loadQuestion();
            });

            // Finalizar juego
            function endGame() {
                document.querySelector('.game-area').style.display = 'none';
                gameOverElement.style.display = 'flex';
                finalScoreElement.textContent = scoreToBe;
            }

            // Reiniciar juego
            restartButton.addEventListener('click', initGame);

            // Iniciar el juego
            initGame();
        });
    </script>
</section>







<section id="daily-routine" class="bg-gradient-to-br from-[#fde9d9] to-[#fbc4ab] py-16 md:py-24 lg:py-32 relative overflow-hidden">
    <!-- Decoración de fondo mejorada -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-10 left-10 w-24 h-24 bg-[#ec5c8d] rounded-full opacity-20 -translate-x-6 -translate-y-6 animate-float"></div>
        <div class="absolute bottom-10 right-10 w-48 h-48 bg-[#a0346e] rounded-full opacity-20 translate-x-12 translate-y-12 animate-float-delay"></div>
        <div class="absolute top-1/3 right-20 w-16 h-16 bg-[#ff9e7d] rounded-full opacity-15 animate-float-2"></div>
        <div class="absolute bottom-1/4 left-20 w-32 h-32 bg-[#d45079] rounded-full opacity-15 animate-float-2-delay"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Encabezado mejorado -->
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#a0346e] mb-6 animate-fadeInDown" style="animation-delay: 0.2s;">
                LECCION 4: ¡Mi Rutina Diaria en Inglés! ⏰
            </h2>
            <p class="text-xl text-[#6d165a] max-w-3xl mx-auto animate-fadeIn" style="animation-delay: 0.4s;">
                Aprende a describir tu día a día con estas estructuras básicas y vocabulario esencial.
            </p>
        </div>

        <!-- Tarjetas principales con hover effects -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Tarjeta 1 mejorada -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-6 transition-all duration-300 hover:-translate-y-2 animate-fadeInLeft" style="animation-delay: 0.4s;">
                <div class="flex items-center mb-4">
                    <div class="bg-[#fbc4ab] p-3 rounded-full mr-4">
                        <span class="text-2xl">🕒</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#ec5c8d]">Rutinas Básicas</h3>
                </div>
                <p class="text-[#6d165a] mb-4"><span class="font-bold text-[#a0346e]">Estructura clave:</span> "I [acción] at [hora]."</p>
                <ul class="space-y-3 text-[#a0346e]">
                    <li class="flex items-start">
                        <span class="bg-[#fde9d9] rounded-full p-1 mr-3 mt-1">•</span>
                        <span>"I <span class="font-bold bg-[#fff3e0] px-1 rounded">wake up</span> at <span class="font-bold bg-[#fff3e0] px-1 rounded">7 AM</span>." (Me despierto a las 7)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-[#fde9d9] rounded-full p-1 mr-3 mt-1">•</span>
                        <span>"I <span class="font-bold bg-[#fff3e0] px-1 rounded">go to bed</span> at <span class="font-bold bg-[#fff3e0] px-1 rounded">10 PM</span>." (Me acuesto a las 10)</span>
                    </li>
                </ul>
                <div class="mt-6">
                    <h4 class="text-lg font-semibold text-[#ec5c8d] mb-3 flex items-center">
                        <span class="bg-[#fbc4ab] p-2 rounded-full mr-2">📊</span> Vocabulario Visual:
                    </h4>
                    <div class="grid grid-cols-3 gap-3 text-center text-[#a0346e] bg-[#fff9f5] p-3 rounded-lg">
                        <div class="font-bold">🏃 Acción</div>
                        <div class="font-bold">⏰ Hora</div>
                        <div class="col-span-3 h-px bg-[#fbc4ab] my-1"></div>
                        <div class="text-left">Wake up</div>
                        <div class="col-span-2 text-right font-bold">7:00 AM</div>
                        <div class="text-left">Eat breakfast</div>
                        <div class="col-span-2 text-right font-bold">7:30 AM</div>
                        <div class="text-left">Go to work/school</div>
                        <div class="col-span-2 text-right font-bold">8:00 AM</div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 mejorada -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-6 transition-all duration-300 hover:-translate-y-2 animate-fadeInUp" style="animation-delay: 0.6s;">
                <div class="flex items-center mb-4">
                    <div class="bg-[#fbc4ab] p-3 rounded-full mr-4">
                        <span class="text-2xl">🌅</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#ec5c8d]">Partes del Día</h3>
                </div>
                <ul class="space-y-4">
                    <li class="p-3 bg-gradient-to-r from-[#fff9f5] to-white rounded-lg border-l-4 border-[#ec5c8d]">
                        <span class="font-bold text-[#a0346e]">Morning</span> (mañana)
                        <p class="text-[#6d165a] italic mt-1">"I drink coffee in the morning."</p>
                    </li>
                    <li class="p-3 bg-gradient-to-r from-[#fff9f5] to-white rounded-lg border-l-4 border-[#d45079]">
                        <span class="font-bold text-[#a0346e]">Afternoon</span> (tarde)
                        <p class="text-[#6d165a] italic mt-1">"I study in the afternoon."</p>
                    </li>
                    <li class="p-3 bg-gradient-to-r from-[#fff9f5] to-white rounded-lg border-l-4 border-[#a0346e]">
                        <span class="font-bold text-[#a0346e]">Night</span> (noche)
                        <p class="text-[#6d165a] italic mt-1">"I watch TV at night."</p>
                    </li>
                </ul>
            </div>

            <!-- Tarjeta 3 mejorada -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-6 transition-all duration-300 hover:-translate-y-2 animate-fadeInRight" style="animation-delay: 0.8s;">
                <div class="flex items-center mb-4">
                    <div class="bg-[#fbc4ab] p-3 rounded-full mr-4">
                        <span class="text-2xl">❓</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#ec5c8d]">Preguntas con "WHAT TIME...?"</h3>
                </div>
                <p class="text-[#a0346e] mb-4 p-3 bg-[#fff9f5] rounded-lg">
                    <span class="font-bold">"What time do you wake up?"</span> → 
                    <span class="italic">"I wake up at 7 AM."</span>
                </p>
                <div class="mt-6">
                    <h4 class="text-lg font-semibold text-[#ec5c8d] mb-3 flex items-center">
                        <span class="bg-[#fbc4ab] p-2 rounded-full mr-2">🎤</span> Diálogo Práctico:
                    </h4>
                    <div class="bg-[#fff9f5] p-4 rounded-lg">
                        <div class="mb-3">
                            <div class="font-bold text-[#a0346e] inline-block bg-white px-3 py-1 rounded-full shadow-sm">A:</div>
                            <p class="ml-3 mt-2 text-[#6d165a]">What time do you eat lunch?</p>
                        </div>
                        <div>
                            <div class="font-bold text-[#a0346e] inline-block bg-white px-3 py-1 rounded-full shadow-sm">B:</div>
                            <p class="ml-3 mt-2 text-[#6d165a]">I eat lunch at 1 PM.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección de juegos mejorada -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-[#6d165a] text-center mb-8 animate-pulse flex justify-center items-center">
                <span class="mr-3">🚀</span> ¡Aprende Jugando! <span class="ml-3">🎲</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Juego 1 mejorado -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-6 transition-all duration-300 hover:-translate-y-1 animate-slideInLeft" style="animation-delay: 1.0s;">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#fbc4ab] p-3 rounded-full mr-4">
                            <span class="text-2xl">🎮</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#ec5c8d]">"Daily Routine Bingo"</h3>
                    </div>
                    <div class="space-y-3 text-[#6d165a]">
                        <p class="flex items-start">
                            <span class="bg-[#fde9d9] rounded-full p-1 mr-3 mt-1">•</span>
                            Tablero virtual con imágenes de rutinas (despertar, comer, dormir).
                        </p>
                        <p class="flex items-start">
                            <span class="bg-[#fde9d9] rounded-full p-1 mr-3 mt-1">•</span>
                            El profesor dice frases: "I brush my teeth at 8 AM."
                        </p>
                        <p class="flex items-start">
                            <span class="bg-[#fde9d9] rounded-full p-1 mr-3 mt-1">•</span>
                            Los estudiantes marcan la acción + hora correcta.
                        </p>
                    </div>
                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <a href="https://genial.ly/" target="_blank" class="bg-[#fde9d9] hover:bg-[#fbc4ab] text-[#a0346e] font-medium py-2 px-4 rounded-lg text-center transition-colors duration-300 flex items-center justify-center">
                            <span class="mr-2">✨</span> Genially
                        </a>
                        <a href="https://kahoot.com/" target="_blank" class="bg-[#fde9d9] hover:bg-[#fbc4ab] text-[#a0346e] font-medium py-2 px-4 rounded-lg text-center transition-colors duration-300 flex items-center justify-center">
                            <span class="mr-2">🎯</span> Kahoot
                        </a>
                    </div>
                </div>

                <!-- Juego 2 mejorado -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-6 transition-all duration-300 hover:-translate-y-1 animate-slideInRight" style="animation-delay: 1.2s;">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#fbc4ab] p-3 rounded-full mr-4">
                            <span class="text-2xl">📝</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#ec5c8d]">"Mi Rutina en Post-Its"</h3>
                    </div>
                    <div class="space-y-3 text-[#6d165a]">
                        <p class="flex items-start">
                            <span class="bg-[#fde9d9] rounded-full p-1 mr-3 mt-1">•</span>
                            Cada estudiante escribe 3 rutinas en notas adhesivas.
                        </p>
                        <p class="flex items-start">
                            <span class="bg-[#fde9d9] rounded-full p-1 mr-3 mt-1">•</span>
                            Las pegan en un mural dividido en "Morning/Afternoon/Night".
                        </p>
                    </div>
                    <div class="mt-6 bg-[#fff9f5] p-4 rounded-lg">
                        <div class="grid grid-cols-3 gap-2 text-center">
                            <div class="bg-[#fde9d9] py-2 rounded font-bold text-[#a0346e]">🌞 Morning</div>
                            <div class="bg-[#fde9d9] py-2 rounded font-bold text-[#a0346e]">🌇 Afternoon</div>
                            <div class="bg-[#fde9d9] py-2 rounded font-bold text-[#a0346e]">🌙 Night</div>
                            <div class="bg-white p-2 rounded shadow-sm">Wake up</div>
                            <div class="bg-white p-2 rounded shadow-sm">Study</div>
                            <div class="bg-white p-2 rounded shadow-sm">Watch TV</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ejercicio escrito mejorado -->
        <div class="mt-16 bg-white rounded-xl shadow-lg p-8 animate-fadeIn" style="animation-delay: 1.4s;">
            <div class="flex items-center mb-6">
                <div class="bg-[#fbc4ab] p-3 rounded-full mr-4">
                    <span class="text-2xl">✍️</span>
                </div>
                <h3 class="text-xl font-bold text-[#ec5c8d]">Ejercicio Escrito</h3>
            </div>
            <p class="text-[#a0346e] mb-6">Completa las siguientes oraciones con la forma correcta del verbo:</p>
            
            <div class="space-y-4">
                <div class="p-4 bg-[#fff9f5] rounded-lg border border-[#fde9d9]">
                    <p class="text-[#6d165a] mb-2">"I ___ dinner at 8 PM."</p>
                    <div class="flex items-center">
                        <span class="text-sm text-[#a0346e] mr-3">Respuesta:</span>
                        <span class="font-bold bg-[#fde9d9] px-3 py-1 rounded-full text-[#a0346e]">eat</span>
                    </div>
                </div>
                
                <div class="p-4 bg-[#fff9f5] rounded-lg border border-[#fde9d9]">
                    <p class="text-[#6d165a] mb-2">"What time ___ you go to school?"</p>
                    <div class="flex items-center">
                        <span class="text-sm text-[#a0346e] mr-3">Respuesta:</span>
                        <span class="font-bold bg-[#fde9d9] px-3 py-1 rounded-full text-[#a0346e]">do</span>
                    </div>
                </div>
                
                <div class="p-4 bg-[#fff9f5] rounded-lg border border-[#fde9d9]">
                    <p class="text-[#6d165a] mb-2">"She ___ TV at night."</p>
                    <div class="flex items-center">
                        <span class="text-sm text-[#a0346e] mr-3">Respuesta:</span>
                        <span class="font-bold bg-[#fde9d9] px-3 py-1 rounded-full text-[#a0346e]">watches</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Material extra mejorado -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Material niños -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-6 transition-all duration-300 hover:-translate-y-1 animate-zoomIn" style="animation-delay: 1.6s;">
                <div class="flex items-center mb-4">
                    <div class="bg-[#fbc4ab] p-3 rounded-full mr-4">
                        <span class="text-2xl">🎁</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#ec5c8d]">Material Extra para Niños</h3>
                </div>
                <div class="flex items-center">
                    <div class="mr-4 text-4xl">⏰</div>
                    <div>
                        <p class="text-[#6d165a] mb-2">Reloj imprimible para practicar horas</p>
                        <a href="#" class="inline-flex items-center text-[#ec5c8d] hover:text-[#a0346e] font-medium transition-colors duration-300">
                            <span class="mr-1">⬇️</span> Descargar aquí
                        </a>
                    </div>
                </div>
                <div class="mt-4 p-3 bg-[#fff9f5] rounded-lg">
                    <p class="text-sm text-[#a0346e]">Incluye plantilla para recortar y manecillas móviles</p>
                </div>
            </div>
            
            <!-- Material adultos -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-6 transition-all duration-300 hover:-translate-y-1 animate-zoomIn" style="animation-delay: 1.8s;">
                <div class="flex items-center mb-4">
                    <div class="bg-[#fbc4ab] p-3 rounded-full mr-4">
                        <span class="text-2xl">▶️</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#ec5c8d]">Material Extra para Adultos</h3>
                </div>
                <div class="flex items-center">
                    <div class="mr-4 text-4xl">📺</div>
                    <div>
                        <p class="text-[#6d165a] mb-2">Video de rutinas reales en inglés</p>
                        <a href="https://www.youtube.com/" target="_blank" class="inline-flex items-center text-[#ec5c8d] hover:text-[#a0346e] font-medium transition-colors duration-300">
                            <span class="mr-1">🔗</span> Ver en YouTube
                        </a>
                    </div>
                </div>
                <div class="mt-4 p-3 bg-[#fff9f5] rounded-lg">
                    <p class="text-sm text-[#a0346e]">Incluye transcripción y ejercicios de comprensión</p>
                </div>
            </div>
        </div>

        <!-- Bonus interactivo mejorado -->
        <div class="mt-16 bg-gradient-to-r from-[#fbc4ab] to-[#ec5c8d] rounded-xl shadow-2xl p-8 text-center animate-bounce" style="animation-delay: 2.0s;">
            <div class="max-w-2xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4 flex justify-center items-center">
                    <span class="mr-3 text-4xl">✨</span> ¡Bonus! Juego Interactivo Digital
                    <span class="ml-3 text-4xl">🎯</span>
                </h2>
                <h3 class="text-xl font-semibold text-white mb-2">"Match the Routine"</h3>
                
                <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg p-4 mb-6">
                    <div class="grid grid-cols-2 gap-4 text-white text-left">
                        <div class="font-bold flex items-center">
                            <span class="mr-2">🛠️</span> Herramienta:
                        </div>
                        <div>Wordwall</div>
                        
                        <div class="font-bold flex items-center">
                            <span class="mr-2">🎲</span> Dinámica:
                        </div>
                        <div>Arrastrar acciones a las horas correctas</div>
                        
                        <div class="font-bold flex items-center">
                            <span class="mr-2">📱</span> Ejemplo:
                        </div>
                        <div>"Wake up" → "6:00 AM"</div>
                    </div>
                </div>
                
                <a href="https://wordwall.net/" target="_blank" class="inline-block bg-white text-[#ec5c8d] font-bold py-3 px-8 rounded-full hover:bg-[#fff9f5] hover:scale-105 transition-all duration-300 shadow-lg">
                    ¡Jugar ahora en Wordwall!
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Animaciones mejoradas */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        transform: scale(1);
        filter: blur(0);
        text-shadow: 0 0 0 transparent;
        box-shadow: 0 0 0 transparent;
        }
    }

    @keyframes slideInLeft {
        from {
            transform: translateX(-50px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideInRight {
        from {
            transform: translateX(50px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes zoomIn {
        from {
            transform: scale(0.9);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-15px);
        }
        60% {
            transform: translateY(-7px);
        }
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes float-delay {
        0%, 100% {
            transform: translateY(0) translateX(0);
        }
        50% {
            transform: translateY(-15px) translateX(10px);
        }
    }

    @keyframes float-2 {
        0%, 100% {
            transform: translateY(0) scale(1);
        }
        50% {
            transform: translateY(-10px) scale(1.05);
        }
    }

    @keyframes float-2-delay {
        0%, 100% {
            transform: translateY(0) scale(1);
        }
        50% {
            transform: translateY(10px) scale(1.05);
        }
    }

    /* Clases de animación */
    .animate-fadeInDown {
        animation: fadeInDown 0.8s ease-out forwards;
    }

    .animate-fadeInLeft {
        animation: fadeInLeft 0.8s ease-out forwards;
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .animate-fadeInRight {
        animation: fadeInRight 0.8s ease-out forwards;
    }

    .animate-fadeIn {
        animation: fadeIn 0.8s ease-out forwards;
    }

    .animate-slideInLeft {
        animation: slideInLeft 0.8s ease-out forwards;
    }

    .animate-slideInRight {
        animation: slideInRight 0.8s ease-out forwards;
    }

    .animate-zoomIn {
        animation: zoomIn 0.6s ease-out forwards;
    }

    .animate-bounce {
        animation: bounce 1.2s infinite;
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .animate-float-delay {
        animation: float-delay 7s ease-in-out infinite;
    }

    .animate-float-2 {
        animation: float-2 5s ease-in-out infinite;
    }

    .animate-float-2-delay {
        animation: float-2-delay 6s ease-in-out infinite 1s;
    }

    /* Efectos hover mejorados */
    .hover-scale {
        transition: transform 0.3s ease;
    }
    
    .hover-scale:hover {
        transform: scale(1.02);
    }
    
    .hover-glow {
        transition: box-shadow 0.3s ease;
    }
    
    .hover-glow:hover {
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer para animaciones
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const animationClasses = [
                        'animate-fadeInDown', 'animate-fadeInLeft', 'animate-fadeInUp',
                        'animate-fadeInRight', 'animate-fadeIn', 'animate-slideInLeft',
                        'animate-slideInRight', 'animate-zoomIn', 'animate-bounce'
                    ];
                    
                    // Añade todas las clases de animación que coincidan
                    animationClasses.forEach(animClass => {
                        if (entry.target.classList.contains(animClass.split(' ')[0])) {
                            entry.target.classList.add(animClass);
                        }
                    });
                }
            });
        }, { threshold: 0.1 });

        // Observar todos los elementos con clases de animación
        document.querySelectorAll('[class*="animate-"]').forEach(el => {
            observer.observe(el);
        });

        // Efecto de confeti al hacer clic en los botones
        document.querySelectorAll('a[target="_blank"]').forEach(link => {
            link.addEventListener('click', function(e) {
                // Solo para demostración - en un entorno real usarías una librería de confeti
                console.log("¡Boom! Confeti imaginario 🎉");
            });
        });
    });
</script>