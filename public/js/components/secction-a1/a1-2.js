document.addEventListener('DOMContentLoaded', function() {
    // =============================================
    // Juego 1: Ordenar la Frase
    // =============================================
    const sentences = [
        "Hello my name is Carlos",
        "I am 25 years old",
        "Nice to meet you",
        "Hi I'm Ana and I'm 30",
        "Good morning my name is Mr. Smith"
    ];

    const scrambleArea = document.getElementById('sentence-scramble-area');
    const optionsArea = document.getElementById('sentence-options');
    const checkBtn = document.getElementById('check-sentence');
    const hintBtn = document.getElementById('scramble-hint');
    const feedbackDiv = document.getElementById('scramble-feedback');
    const nextBtn = document.getElementById('next-sentence');
    
    let currentSentence = '';
    let scrambledWords = [];
    let placedWords = [];
    
    function initSentenceGame() {
        // Elegir una frase aleatoria
        currentSentence = sentences[Math.floor(Math.random() * sentences.length)];
        const words = currentSentence.split(' ');
        
        // Mezclar palabras
        scrambledWords = [...words].sort(() => Math.random() - 0.5);
        placedWords = [];
        
        // Limpiar áreas
        scrambleArea.innerHTML = '<p class="text-[#0288d1] text-center">Arrastra las palabras aquí</p>';
        optionsArea.innerHTML = '';
        feedbackDiv.classList.add('hidden');
        nextBtn.classList.add('hidden');
        
        // Mostrar palabras mezcladas
        scrambledWords.forEach((word, index) => {
            const wordElement = document.createElement('div');
            wordElement.className = 'scramble-word';
            wordElement.textContent = word;
            wordElement.draggable = true;
            wordElement.dataset.index = index;
            
            wordElement.addEventListener('dragstart', (e) => {
                e.dataTransfer.setData('text/plain', index);
            });
            
            optionsArea.appendChild(wordElement);
        });
        
        // Configurar zona de arrastre
        scrambleArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            scrambleArea.style.backgroundColor = '#b3e5fc';
        });
        
        scrambleArea.addEventListener('dragleave', () => {
            scrambleArea.style.backgroundColor = '#e1f5fe';
        });
        
        scrambleArea.addEventListener('drop', (e) => {
            e.preventDefault();
            scrambleArea.style.backgroundColor = '#e1f5fe';
            
            const wordIndex = e.dataTransfer.getData('text/plain');
            const wordElement = optionsArea.querySelector(`[data-index="${wordIndex}"]`);
            
            if (wordElement && !placedWords.includes(parseInt(wordIndex))) {
                placedWords.push(parseInt(wordIndex));
                
                const placedWord = wordElement.cloneNode(true);
                placedWord.classList.add('placed');
                placedWord.draggable = false;
                
                if (scrambleArea.firstChild?.tagName === 'P') {
                    scrambleArea.innerHTML = '';
                }
                
                scrambleArea.appendChild(placedWord);
                wordElement.style.visibility = 'hidden';
            }
        });
    }
    
    checkBtn.addEventListener('click', () => {
        const userSentence = Array.from(scrambleArea.children)
            .map(el => el.textContent)
            .join(' ');
        
        if (userSentence === currentSentence) {
            feedbackDiv.innerHTML = '<p class="text-[#2e7d32] font-medium">¡Correcto! Perfecta pronunciación.</p>';
            nextBtn.classList.remove('hidden');
        } else {
            feedbackDiv.innerHTML = '<p class="text-[#c62828] font-medium">Casi lo tienes. Intenta de nuevo.</p>';
        }
        
        feedbackDiv.classList.remove('hidden');
    });
    
    hintBtn.addEventListener('click', () => {
        const missingWords = currentSentence.split(' ').filter((word, index) => {
            return !placedWords.includes(scrambledWords.indexOf(word));
        });
        
        if (missingWords.length > 0) {
            alert(`Pista: La siguiente palabra es "${missingWords[0]}"`);
        }
    });
    
    nextBtn.addEventListener('click', initSentenceGame);
    
    // =============================================
    // Juego 2: Elige la Respuesta Correcta
    // =============================================
    const quizQuestions = [
        {
            question: "¿Cómo respondes cuando alguien dice 'Nice to meet you'?",
            options: [
                "Nice to meet you too",
                "I'm fine",
                "Goodbye",
                "My name is Ana"
            ],
            correct: 0
        },
        {
            question: "¿Cómo dices 'Tengo 25 años' en inglés?",
            options: [
                "I have 25 years",
                "I am 25 years old",
                "I'm 25 years",
                "I old 25 years"
            ],
            correct: 1
        },
        {
            question: "¿Cómo empiezas una presentación formal?",
            options: [
                "Hey!",
                "Hello, my name is...",
                "What's up?",
                "I'm hungry"
            ],
            correct: 1
        },
        {
            question: "Si alguien dice 'Hi! I'm John', ¿qué responderías?",
            options: [
                "Goodbye John",
                "Nice to meet you John, I'm...",
                "I'm 20 years old",
                "Thank you"
            ],
            correct: 1
        },
        {
            question: "¿Cómo preguntas la edad de alguien?",
            options: [
                "How old you are?",
                "What's your age?",
                "How old are you?",
                "You have years?"
            ],
            correct: 2
        }
    ];
    
    const quizContainer = document.getElementById('question-container');
    const optionsContainer = document.getElementById('quiz-options');
    const quizFeedback = document.getElementById('quiz-feedback');
    const quizNextBtn = document.getElementById('next-question');
    const quizCounter = document.getElementById('quiz-counter');
    
    let currentQuestion = 0;
    let score = 0;
    let selectedOption = null;
    
    function loadQuestion(index) {
        const question = quizQuestions[index];
        document.getElementById('quiz-question').textContent = question.question;
        optionsContainer.innerHTML = '';
        
        question.options.forEach((option, i) => {
            const optionElement = document.createElement('div');
            optionElement.className = 'quiz-option';
            optionElement.textContent = option;
            optionElement.dataset.index = i;
            
            optionElement.addEventListener('click', () => {
                if (!selectedOption) {
                    selectedOption = i;
                    
                    // Estilo para opción seleccionada
                    document.querySelectorAll('.quiz-option').forEach(el => {
                        el.classList.remove('selected');
                    });
                    optionElement.classList.add('selected');
                    
                    // Comprobar respuesta
                    if (i === question.correct) {
                        optionElement.classList.add('correct');
                        score++;
                        quizFeedback.innerHTML = '<span class="text-[#2e7d32]">✓ Correct! Well done!</span>';
                    } else {
                        optionElement.classList.add('incorrect');
                        optionsContainer.children[question.correct].classList.add('correct');
                        quizFeedback.innerHTML = '<span class="text-[#c62828]">✗ Incorrect. The right answer is: "' + question.options[question.correct] + '"</span>';
                    }
                    
                    quizFeedback.classList.remove('hidden');
                    quizNextBtn.classList.remove('hidden');
                }
            });
            
            optionsContainer.appendChild(optionElement);
        });
        
        quizCounter.textContent = `Question ${index + 1}/${quizQuestions.length}`;
        quizFeedback.classList.add('hidden');
        quizNextBtn.classList.add('hidden');
        selectedOption = null;
    }
    
    quizNextBtn.addEventListener('click', () => {
        currentQuestion++;
        
        if (currentQuestion < quizQuestions.length) {
            loadQuestion(currentQuestion);
        } else {
            // Mostrar resultados finales
            quizContainer.innerHTML = `
                <div class="text-center">
                    <h3 class="text-xl font-bold text-[#01579b] mb-2">Quiz Complete!</h3>
                    <p class="text-[#0277bd]">Your score: ${score}/${quizQuestions.length}</p>
                    <p class="text-[#039be5] mt-2">${score >= quizQuestions.length * 0.8 ? 'Excellent!' : score >= quizQuestions.length * 0.5 ? 'Good job!' : 'Keep practicing!'}</p>
                </div>
            `;
            optionsContainer.innerHTML = '';
            quizNextBtn.classList.add('hidden');
            
            // Botón para reiniciar
            const restartBtn = document.createElement('button');
            restartBtn.className = 'bg-[#0288d1] hover:bg-[#01579b] text-white font-medium py-2 px-4 rounded-lg transition-all mt-4';
            restartBtn.textContent = 'Try Again';
            restartBtn.addEventListener('click', () => {
                currentQuestion = 0;
                score = 0;
                loadQuestion(0);
            });
            
            optionsContainer.appendChild(restartBtn);
        }
    });
    
    // =============================================
    // Nueva Sección: 💬 Practice Dialogues
    // =============================================
    const dialogues = {
        meeting: {
            title: "Meeting someone new",
            lines: [
                { speaker: "Person A", message: "Hello! What's your name?" },
                { speaker: "You", response: "My name is [your name]", hints: ["I'm [name]", "Hi, I'm [name]"] },
                { speaker: "Person A", message: "Nice to meet you! How old are you?" },
                { speaker: "You", response: "I am [number] years old", hints: ["I'm [number]", "[number] years old"] }
            ]
        },
        classroom: {
            title: "Classroom introduction",
            lines: [
                { speaker: "Teacher", message: "Good morning class! Let's introduce ourselves." },
                { speaker: "Teacher", message: "What's your name?" },
                { speaker: "You", response: "My name is [your name]", hints: ["I'm [name]", "Hi, I'm [name]"] },
                { speaker: "Teacher", message: "Nice to have you in class!" }
            ]
        },
        party: {
            title: "Party conversation",
            lines: [
                { speaker: "Person A", message: "Hi! I don't think we've met. I'm Sarah." },
                { speaker: "You", response: "Nice to meet you Sarah", hints: ["Hi Sarah", "Hello Sarah"] },
                { speaker: "Person A", message: "What's your name?" },
                { speaker: "You", response: "I'm [your name]", hints: ["My name is [name]", "Call me [name]"] }
            ]
        },
        work: {
            title: "Work introduction",
            lines: [
                { speaker: "Colleague", message: "Good morning. Are you new here?" },
                { speaker: "You", response: "Yes, I am", hints: ["Yes, it's my first day", "That's right"] },
                { speaker: "Colleague", message: "What's your name?" },
                { speaker: "You", response: "My name is [your name]", hints: ["I'm [name]", "[name]"] }
            ]
        }
    };
    
    const dialogueSelect = document.getElementById('dialogue-select');
    const startDialogueBtn = document.getElementById('start-dialogue');
    const dialoguePractice = document.getElementById('dialogue-practice');
    const dialogueQuestion = document.getElementById('dialogue-question');
    const dialogueAnswer = document.getElementById('dialogue-answer');
    const checkDialogueBtn = document.getElementById('check-dialogue');
    const dialogueFeedback = document.getElementById('dialogue-feedback');
    const nextDialogueBtn = document.getElementById('next-dialogue');
    const dialogueProgress = document.getElementById('dialogue-progress');
    const dialogueHint = document.getElementById('dialogue-hint');
    const dialogueComplete = document.getElementById('dialogue-complete');
    const fullDialogue = document.getElementById('full-dialogue');
    const restartDialogueBtn = document.getElementById('restart-dialogue');
    
    let currentDialogue = null;
    let currentLine = 0;
    let userResponses = [];
    
    startDialogueBtn.addEventListener('click', () => {
        currentDialogue = dialogues[dialogueSelect.value];
        currentLine = 0;
        userResponses = [];
        
        dialoguePractice.classList.remove('hidden');
        dialogueComplete.classList.add('hidden');
        loadDialogueLine();
    });
    
    function loadDialogueLine() {
        const line = currentDialogue.lines[currentLine];
        
        if (line.speaker === "You") {
            dialogueQuestion.textContent = "";
            dialogueAnswer.value = "";
            dialogueAnswer.placeholder = "Your response...";
            dialogueAnswer.focus();
            dialogueHint.classList.add('hidden');
            dialogueFeedback.classList.add('hidden');
            
            // Mostrar mensaje anterior si existe
            if (currentLine > 0) {
                const prevLine = currentDialogue.lines[currentLine - 1];
                dialogueQuestion.textContent = prevLine.message;
            }
        } else {
            dialogueQuestion.textContent = line.message;
            dialogueAnswer.value = "";
            dialogueAnswer.placeholder = "Press 'Continue'";
            dialogueAnswer.disabled = true;
            checkDialogueBtn.disabled = true;
            dialogueHint.classList.add('hidden');
            
            if (currentLine < currentDialogue.lines.length - 1) {
                nextDialogueBtn.classList.remove('hidden');
            } else {
                // Diálogo completo
                showCompleteDialogue();
            }
        }
        
        dialogueProgress.textContent = `Line ${currentLine + 1}/${currentDialogue.lines.length}`;
    }
    
    checkDialogueBtn.addEventListener('click', () => {
        const line = currentDialogue.lines[currentLine];
        const userAnswer = dialogueAnswer.value.trim().toLowerCase();
        const correctAnswer = line.response.toLowerCase();
        
        // Guardar respuesta del usuario
        userResponses.push({
            line: line,
            userAnswer: userAnswer,
            isCorrect: userAnswer.includes(correctAnswer.replace('[your name]', '').replace('[name]', '').trim()) || 
                      line.hints.some(hint => userAnswer.includes(hint.replace('[your name]', '').replace('[name]', '').trim()))
        });
        
        // Mostrar feedback
        if (userResponses[currentLine].isCorrect) {
            dialogueFeedback.querySelector('p').textContent = "Good answer!";
            dialogueFeedback.querySelector('p').className = "font-medium text-[#2e7d32]";
        } else {
            dialogueFeedback.querySelector('p').textContent = "Almost! Try again.";
            dialogueFeedback.querySelector('p').className = "font-medium text-[#c62828]";
        }
        
        // Mostrar sugerencias
        const hintsText = line.hints.map(hint => `"${hint}"`).join(' or ');
        document.getElementById('feedback-text').textContent = `You could say: ${hintsText}`;
        
        dialogueFeedback.classList.remove('hidden');
        nextDialogueBtn.classList.remove('hidden');
    });
    
    dialogueHint.addEventListener('click', () => {
        const line = currentDialogue.lines[currentLine];
        const hint = line.hints[0].replace('[your name]', 'your name').replace('[name]', 'your name');
        dialogueAnswer.value = hint;
        dialogueAnswer.focus();
    });
    
    nextDialogueBtn.addEventListener('click', () => {
        currentLine++;
        if (currentLine < currentDialogue.lines.length) {
            loadDialogueLine();
        } else {
            showCompleteDialogue();
        }
    });
    
    function showCompleteDialogue() {
        dialoguePractice.classList.add('hidden');
        dialogueComplete.classList.remove('hidden');
        
        fullDialogue.innerHTML = '';
        currentDialogue.lines.forEach((line, index) => {
            const lineDiv = document.createElement('div');
            lineDiv.className = 'dialogue-line';
            
            const speakerDiv = document.createElement('div');
            speakerDiv.className = 'speaker';
            speakerDiv.textContent = line.speaker;
            
            const messageDiv = document.createElement('div');
            messageDiv.className = 'message';
            
            const messageP = document.createElement('p');
            messageP.textContent = line.speaker === "You" ? 
                (userResponses[index]?.userAnswer || line.response) : 
                line.message;
            
            messageDiv.appendChild(messageP);
            lineDiv.appendChild(speakerDiv);
            lineDiv.appendChild(messageDiv);
            fullDialogue.appendChild(lineDiv);
        });
    }
    
    restartDialogueBtn.addEventListener('click', () => {
        currentLine = 0;
        userResponses = [];
        dialogueComplete.classList.add('hidden');
        dialoguePractice.classList.remove('hidden');
        loadDialogueLine();
    });
    
    // Inicializar juegos
    initSentenceGame();
    loadQuestion(0);
});