 
   
   document.addEventListener('DOMContentLoaded', function() {
    // Animaciones al cargar
    const elementsToAnimate = document.querySelectorAll('#leccion-a2 .animate-fadeIn, #leccion-a2 .animate-slideInLeft, #leccion-a2 .animate-slideInRight');
    elementsToAnimate.forEach((el, index) => {
        setTimeout(() => {
            el.style.opacity = '1';
            el.style.transform = 'translateY(0) translateX(0)';
        }, 100 * (index + 1));
    });

    // Mostrar vocabulario
    const classroomObjectsSpan = document.getElementById('classroom-objects');
    const dailyObjectsSpan = document.getElementById('daily-objects');

    if (classroomObjectsSpan) {
        classroomObjectsSpan.addEventListener('click', function() {
            alert('Cosas en un salón de clases: Pen (bolígrafo), pencil (lápiz), notebook (cuaderno), chair (silla), table (mesa)');
        });
    }

    if (dailyObjectsSpan) {
        dailyObjectsSpan.addEventListener('click', function() {
            alert('Objetos cotidianos: Phone (teléfono), bag (bolso), key (llave), cup (taza)');
        });
    }

    // Verificar ejercicio de artículos
    const checkArticleButtons = document.querySelectorAll('.check-article');
    checkArticleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const userAnswer = this.previousElementSibling.textContent.trim().split(' ')[0].toLowerCase();
            const correctAnswer = this.dataset.answer;
            const resultSpan = this.nextElementSibling;
            const incorrectSpan = this.nextElementSibling.nextElementSibling;

            if (userAnswer === correctAnswer) {
                resultSpan.classList.remove('hidden');
                incorrectSpan.classList.add('hidden');
            } else {
                resultSpan.classList.add('hidden');
                incorrectSpan.classList.remove('hidden');
            }
        });
    });

    // Verificar ejercicio de plurales
    const checkPluralButtons = document.querySelectorAll('.check-plural');
    checkPluralButtons.forEach(button => {
        button.addEventListener('click', function() {
            const inputField = this.previousElementSibling;
            const userAnswer = inputField.value.trim().toLowerCase();
            const correctAnswer = this.dataset.answer;
            const correctSpan = this.nextElementSibling;
            const incorrectSpan = this.nextElementSibling.nextElementSibling;

            if (userAnswer === correctAnswer) {
                correctSpan.classList.remove('hidden');
                incorrectSpan.classList.add('hidden');
            } else {
                correctSpan.classList.add('hidden');
                incorrectSpan.classList.remove('hidden');
            }
        });
    });

    // Simulación de práctica de "What is this/that?"
    const practiceWhatButton = document.getElementById('practice-what');
    if (practiceWhatButton) {
        practiceWhatButton.addEventListener('click', function() {
            alert('¡Comencemos a practicar! (Imagina que ves diferentes objetos y respondes)');
            // Aquí se podría implementar una interfaz interactiva con imágenes de objetos
        });
    }

    // Simulación de escuchar pronunciación
    const listenDifferenceButton = document.querySelector('#leccion-a2 .bg-white:nth-child(2) button');
    if (listenDifferenceButton) {
        listenDifferenceButton.addEventListener('click', function() {
            alert('Reproduciendo la diferencia entre la pronunciación de "pen" y "pan"...');
            // Aquí se integraría la lógica para reproducir audio
        });
    }
});

















document.addEventListener('DOMContentLoaded', function() {
    // Datos para el juego de memoria
    const numbersMemory = [
        { number: 7, word: "Seven" },
        { number: 12, word: "Twelve" },
        { number: 20, word: "Twenty" },
        { number: 35, word: "Thirty-five" },
        { number: 8, word: "Eight" },
        { number: 15, word: "Fifteen" },
        { number: 50, word: "Fifty" },
        { number: 100, word: "One hundred" }
    ];
    
    // Variables para el juego de memoria
    let memoryCards = [];
    let flippedCards = [];
    let matches = 0;
    
    // Inicializar el juego de memoria corregido
    function initMemoryGame() {
        const gameContainer = document.getElementById('number-memory-game');
        gameContainer.innerHTML = '';
        flippedCards = [];
        matches = 0;
        document.getElementById('memory-score').textContent = 'Matches: 0/8';
        
        // Duplicar y mezclar las tarjetas
        memoryCards = [];
        numbersMemory.forEach(item => {
            memoryCards.push({ type: 'number', content: item.number, pair: item.word });
            memoryCards.push({ type: 'word', content: item.word, pair: item.number });
        });
        
        // Mezclar las tarjetas
        memoryCards.sort(() => Math.random() - 0.5);
        
        // Crear las tarjetas en el DOM
        memoryCards.forEach((card, index) => {
            const cardElement = document.createElement('div');
            cardElement.className = 'memory-card';
            cardElement.dataset.index = index;
            cardElement.dataset.content = card.content;
            cardElement.dataset.pair = card.pair;
            
            cardElement.addEventListener('click', flipCard);
            gameContainer.appendChild(cardElement);
        });
    }
    
    // Voltear una tarjeta (versión corregida)
    function flipCard(event) {
        const card = event.currentTarget;
        
        // No hacer nada si la tarjeta ya está volteada o emparejada
        if (card.classList.contains('flipped') || flippedCards.length >= 2) {
            return;
        }
        
        // Voltear la tarjeta
        card.classList.add('flipped');
        flippedCards.push(card);
        
        // Comprobar si hay dos tarjetas volteadas
        if (flippedCards.length === 2) {
            const [firstCard, secondCard] = flippedCards;
            
            // Comprobar si son pareja
            if (firstCard.dataset.content === secondCard.dataset.pair || 
                firstCard.dataset.pair === secondCard.dataset.content) {
                // Pareja correcta
                firstCard.classList.add('matched');
                secondCard.classList.add('matched');
                matches++;
                document.getElementById('memory-score').textContent = `Matches: ${matches}/8`;
                flippedCards = [];
                
                // Comprobar si se ha completado el juego
                if (matches === 8) {
                    setTimeout(() => {
                        alert('🎉 Congratulations! You matched all numbers!');
                    }, 500);
                }
            } else {
                // Pareja incorrecta - voltear de nuevo después de un breve retraso
                setTimeout(() => {
                    firstCard.classList.remove('flipped');
                    secondCard.classList.remove('flipped');
                    flippedCards = [];
                }, 1000);
            }
        }
    }
    
    // Variables para el nuevo juego de edad
    let currentAge = 0;
    let correctAnswers = 0;
    let incorrectAnswers = 0;
    
    // Datos para el juego de edad
    const ageQuestions = [
        { age: 5, correct: "I am five years old.", incorrects: ["I have five years.", "I am five year old.", "Five years I have."] },
        { age: 12, correct: "I am twelve years old.", incorrects: ["I have twelve years old.", "I am twelve year old.", "Twelve years I am."] },
        { age: 20, correct: "I am twenty years old.", incorrects: ["I have twenty years.", "I am twenty year old.", "Twenty years I have."] },
        { age: 35, correct: "I am thirty-five years old.", incorrects: ["I have thirty-five years.", "I am thirty five years old.", "Thirty-five years I am."] },
        { age: 50, correct: "I am fifty years old.", incorrects: ["I have fifty years.", "I am fifty year old.", "Fifty years I have."] }
    ];
    
    // Inicializar el juego de edad
    function initAgeGame() {
        document.getElementById('age-feedback').textContent = '';
        document.getElementById('next-age').classList.add('hidden');
        updateAgeCounter();
        generateAgeQuestion();
    }
    
    // Generar nueva pregunta de edad
    function generateAgeQuestion() {
        const questionContainer = document.getElementById('age-question-container');
        const optionsContainer = document.getElementById('age-options');
        
        questionContainer.innerHTML = '';
        optionsContainer.innerHTML = '';
        
        // Seleccionar una pregunta aleatoria
        const randomQuestion = ageQuestions[Math.floor(Math.random() * ageQuestions.length)];
        currentAge = randomQuestion.age;
        
        // Mostrar la pregunta
        const questionElement = document.createElement('div');
        questionElement.className = 'age-question';
        questionElement.textContent = `How would you say you are ${currentAge} years old in English?`;
        questionContainer.appendChild(questionElement);
        
        // Generar opciones (1 correcta y 3 incorrectas)
        const options = [randomQuestion.correct, ...randomQuestion.incorrects];
        
        // Mezclar las opciones
        options.sort(() => Math.random() - 0.5);
        
        // Crear los botones de opción
        options.forEach(option => {
            const optionElement = document.createElement('div');
            optionElement.className = 'age-option';
            optionElement.textContent = option;
            
            optionElement.addEventListener('click', function() {
                checkAgeAnswer(option, randomQuestion.correct);
            });
            
            optionsContainer.appendChild(optionElement);
        });
    }
    
    // Verificar la respuesta en el juego de edad
    function checkAgeAnswer(selectedOption, correctAnswer) {
        const options = document.querySelectorAll('.age-option');
        const feedback = document.getElementById('age-feedback');
        const nextButton = document.getElementById('next-age');
        
        options.forEach(option => {
            option.classList.remove('selected', 'correct', 'incorrect');
            
            if (option.textContent === correctAnswer) {
                option.classList.add('correct');
            } else if (option.textContent === selectedOption && selectedOption !== correctAnswer) {
                option.classList.add('incorrect');
            }
            
            // Deshabilitar clics adicionales
            option.style.pointerEvents = 'none';
        });
        
        if (selectedOption === correctAnswer) {
            feedback.textContent = '✅ Correct! Well done!';
            feedback.style.color = '#4caf50';
            correctAnswers++;
        } else {
            feedback.textContent = `❌ Incorrect! The correct answer is: "${correctAnswer}"`;
            feedback.style.color = '#f44336';
            incorrectAnswers++;
        }
        
        updateAgeCounter();
        nextButton.classList.remove('hidden');
    }
    
    // Actualizar el contador de aciertos/errores
    function updateAgeCounter() {
        document.getElementById('age-counter').textContent = 
            `Correct: ${correctAnswers} | Incorrect: ${incorrectAnswers}`;
    }
    
    // Configurar el botón "Next Question"
    document.getElementById('next-age').addEventListener('click', generateAgeQuestion);
    
    // Botón para reiniciar el juego de memoria
    document.getElementById('reset-memory').addEventListener('click', initMemoryGame);
    
    // Generar una edad aleatoria para practicar
    document.getElementById('random-age').addEventListener('click', function() {
        const randomAge = Math.floor(Math.random() * 100) + 1;
        const ageDisplay = document.getElementById('age-display');
        const ageAnswer = document.getElementById('age-answer');
        
        ageDisplay.textContent = randomAge;
        ageAnswer.textContent = `"I am ${randomAge} years old."`;
        ageAnswer.classList.remove('hidden');
    });
    
    // Inicializar los juegos
    initMemoryGame();
    initAgeGame();
});





// numbers-age.js - Código del juego separado

document.addEventListener('DOMContentLoaded', function() {
// [Todo el código del juego que tenías antes]
console.log("Numbers & Age component loaded!");

// Inicializar juegos
initMemoryGame();
initAgeGame();

// Configurar eventos
document.getElementById('next-age')?.addEventListener('click', generateAgeQuestion);
document.getElementById('reset-memory')?.addEventListener('click', initMemoryGame);
document.getElementById('random-age')?.addEventListener('click', generateRandomAge);
});
