<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domina el Inglés Paso a Paso</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        .hero {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            padding: 5rem 2rem;
            text-align: center;
            color: white;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            color: white;
            padding: 0.8rem 1.8rem;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            margin: 0.3rem;
        }

        .btn-primary {
            background-color: #ff7e5f;
            box-shadow: 0 4px 15px rgba(255, 126, 95, 0.3);
        }

        .btn-primary:hover {
            background-color: #ff6b4a;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 126, 95, 0.4);
        }

        .btn-secondary {
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }

        .levels-section {
            padding: 4rem 2rem;
            text-align: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .levels-section h2 {
            font-size: 2rem;
            color: #4a4a4a;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .levels-section p.subtitle {
            color: #666;
            margin-bottom: 3rem;
            font-size: 1.1rem;
        }

        .levels-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .level-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
        }

        .level-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .level-card h3 {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            font-weight: 600;
            color: #4a4a4a;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .level-card h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, #6e8efb, #a777e3);
            border-radius: 3px;
        }

        .level-card p {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 1rem;
            flex-grow: 1;
        }

        .level-card p strong {
            color: #4a4a4a;
        }

        .card-footer {
            margin-top: auto;
            padding-top: 1rem;
        }

        .btn-card {
            background: linear-gradient(90deg, #6e8efb, #a777e3);
            color: white;
            font-size: 0.9rem;
            padding: 0.6rem 1.5rem;
        }

        .btn-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(110, 142, 251, 0.3);
        }

        .importance-section {
            background: linear-gradient(135deg, #f5f7fa, #e4e8f0);
            padding: 5rem 2rem;
            text-align: center;
            border-radius: 20px 20px 0 0;
            margin-top: 4rem;
        }

        .importance-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .importance-section h2 {
            font-size: 2rem;
            color: #4a4a4a;
            margin-bottom: 3rem;
            font-weight: 600;
        }

        .importance-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .importance-point {
            background-color: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .importance-point:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .importance-point h4 {
            font-size: 1.2rem;
            color: #6e8efb;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .importance-point p {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .section-cta {
            text-align: center;
            padding: 3rem 2rem;
            background-color: white;
        }

        .section-cta h3 {
            font-size: 1.8rem;
            color: #4a4a4a;
            margin-bottom: 1.5rem;
        }

        .nav-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            text-decoration: none;
            box-shadow: 0 5px 20px rgba(110, 142, 251, 0.3);
            transition: all 0.3s ease;
            z-index: 100;
            opacity: 0;
            visibility: hidden;
        }

        .nav-button.visible {
            opacity: 1;
            visibility: visible;
        }

        .nav-button:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(110, 142, 251, 0.4);
        }

        @media (max-width: 768px) {
            .hero {
                padding: 3rem 1.5rem;
            }
            
            .hero h2 {
                font-size: 2rem;
            }
            
            .levels-section, .importance-section, .section-cta {
                padding: 3rem 1.5rem;
            }
            
            .nav-button {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
                bottom: 20px;
                right: 20px;
            }
        }
    </style>
</head>
<body>
    <section class="hero">
        <div class="hero-content">
            <h2>Domina el Inglés con Confianza</h2>
            <p>Aprende de manera estructurada y alcanza la fluidez paso a paso con nuestro método probado.</p>
            <div>
                <a href="#levels" class="btn btn-primary">Explora los Niveles</a>
                <a href="#importance" class="btn btn-secondary">¿Por qué funciona?</a>
            </div>
        </div>
    </section>

    <section id="levels" class="levels-section">
        <h2>Tu Camino hacia la Fluidez</h2>
        <p class="subtitle">Niveles claramente definidos para un aprendizaje efectivo</p>
        
        <div class="levels-grid">
            <div class="level-card">
                <h3>A1 - Principiante</h3>
                <p><strong>Contenido:</strong> Saludos, presentaciones, información personal básica, objetos cotidianos, números.</p>
                <p><strong>Importancia:</strong> La base fundamental para comunicarte en situaciones simples.</p>
                <div class="card-footer">
                    <a href="#" class="btn btn-card">Empieza aquí</a>
                </div>
            </div>
            
            <div class="level-card">
                <h3>A2 - Básico</h3>
                <p><strong>Contenido:</strong> Frases frecuentes, información sobre familia, compras, lugares de interés.</p>
                <p><strong>Importancia:</strong> Te permite desenvolverte en tareas cotidianas básicas.</p>
                <div class="card-footer">
                    <a href="#" class="btn btn-card">Continuar</a>
                </div>
            </div>
            
            <div class="level-card">
                <h3>B1 - Intermedio</h3>
                <p><strong>Contenido:</strong> Puntos principales de textos claros, viajes, temas conocidos.</p>
                <p><strong>Importancia:</strong> Clave para comprender conversaciones sobre temas familiares.</p>
                <div class="card-footer">
                    <a href="#" class="btn btn-card">Siguiente nivel</a>
                </div>
            </div>
            
            <div class="level-card">
                <h3>B2 - Intermedio Alto</h3>
                <p><strong>Contenido:</strong> Ideas de textos complejos, interacción fluida, argumentación.</p>
                <p><strong>Importancia:</strong> Te acerca a la fluidez en discusiones.</p>
                <div class="card-footer">
                    <a href="#" class="btn btn-card">Avanzar</a>
                </div>
            </div>
            
            <div class="level-card">
                <h3>C1 - Avanzado</h3>
                <p><strong>Contenido:</strong> Textos exigentes, expresión fluida, uso flexible del idioma.</p>
                <p><strong>Importancia:</strong> Comunicación efectiva en contextos profesionales.</p>
                <div class="card-footer">
                    <a href="#" class="btn btn-card">Profundizar</a>
                </div>
            </div>
            
            <div class="level-card">
                <h3>C2 - Maestría</h3>
                <p><strong>Contenido:</strong> Comprensión de todo, expresión precisa, matices.</p>
                <p><strong>Importancia:</strong> Dominio total como hablante nativo.</p>
                <div class="card-footer">
                    <a href="#" class="btn btn-card">Perfeccionar</a>
                </div>
            </div>
        </div>
    </section>

    <section id="importance" class="importance-section">
        <div class="importance-container">
            <h2>¿Por qué aprender de forma estructurada?</h2>
            
            <div class="importance-grid">
                <div class="importance-point">
                    <h4>Enfoque Claro</h4>
                    <p>Sabes exactamente qué aprender en cada etapa sin distracciones ni información innecesaria.</p>
                    <a href="#" class="btn btn-card">Ver método</a>
                </div>
                
                <div class="importance-point">
                    <h4>Progreso Medible</h4>
                    <p>Puedes ver tu avance claramente, lo que aumenta tu motivación y compromiso.</p>
                    <a href="#" class="btn btn-card">Ver progreso</a>
                </div>
                
                <div class="importance-point">
                    <h4>Fundamentos Sólidos</h4>
                    <p>Cada nivel construye sobre el anterior, asegurando una base lingüística robusta.</p>
                    <a href="#" class="btn btn-card">Ver fundamentos</a>
                </div>
                
                <div class="importance-point">
                    <h4>Eficiencia</h4>
                    <p>Aprendes lo más importante primero, optimizando tu tiempo y esfuerzo.</p>
                    <a href="#" class="btn btn-card">Optimizar</a>
                </div>
            </div>
        </div>
    </section>

    <div class="section-cta">
        <h3>¿Listo para comenzar tu viaje con el inglés?</h3>
        <a href="#levels" class="btn btn-primary">Empieza ahora</a>
    </div>

    <a href="#" class="nav-button">↑</a>

    <script>
        // Scroll suave para todos los enlaces
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Mostrar/ocultar botón de navegación
        window.addEventListener('scroll', () => {
            const navButton = document.querySelector('.nav-button');
            if (window.scrollY > 300) {
                navButton.classList.add('visible');
            } else {
                navButton.classList.remove('visible');
            }
        });
    </script>
</body>
</html>

