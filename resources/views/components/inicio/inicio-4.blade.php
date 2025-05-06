<style>
    /* Estilos base - Clases personalizadas para evitar conflictos */
    .eng-menu-container {
        max-width: 1200px;
        width: 95%;
        margin: 2rem auto;
        padding: 1.5rem;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }
    
    .eng-menu-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }
    
    .eng-menu-title {
        color: #3f3f46;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        background: linear-gradient(90deg, #4CAF50 0%, #2E7D32 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .eng-menu-subtitle {
        color: #71717a;
        font-size: 1rem;
        font-weight: 400;
    }
    
    /* Menú de navegación */
    .eng-nav-menu {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        margin-bottom: 2rem;
        padding: 0.5rem;
        background: #f4f4f5;
        border-radius: 10px;
    }
    
    .eng-nav-btn {
        padding: 0.75rem 1.25rem;
        border: none;
        border-radius: 8px;
        background-color: transparent;
        color: #3f3f46;
        cursor: pointer;
        font-size: 0.95rem;
        font-weight: 500;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        white-space: nowrap;
    }
    
    .eng-nav-btn:hover {
        background-color: #e5e7eb;
        transform: translateY(-2px);
    }
    
    .eng-nav-btn.active {
        background-color: #4CAF50;
        color: white;
        box-shadow: 0 4px 6px rgba(74, 222, 128, 0.2);
    }
    
    /* Contenido */
    .eng-content-section {
        display: none;
        padding: 1.75rem;
        border-radius: 10px;
        background-color: #fafafa;
        border: 1px solid #e5e7eb;
        animation: fadeIn 0.4s ease-out;
    }
    
    .eng-content-section.active {
        display: block;
    }
    
    .eng-section-title {
        font-size: 1.75rem;
        font-weight: 600;
        margin-bottom: 1.25rem;
        color: #3f3f46;
        position: relative;
        padding-bottom: 0.5rem;
    }
    
    .eng-section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #4CAF50 0%, #2E7D32 100%);
        border-radius: 3px;
    }
    
    .eng-section-content {
        font-size: 1rem;
        line-height: 1.8;
        color: #52525b;
    }
    
    /* Efectos y animaciones */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .eng-menu-container {
            width: 98%;
            padding: 1rem;
        }
        
        .eng-nav-menu {
            overflow-x: auto;
            padding-bottom: 0.5rem;
            scrollbar-width: thin;
            scrollbar-color: #4CAF50 #f4f4f5;
        }
        
        .eng-nav-menu::-webkit-scrollbar {
            height: 6px;
        }
        
        .eng-nav-menu::-webkit-scrollbar-track {
            background: #f4f4f5;
            border-radius: 10px;
        }
        
        .eng-nav-menu::-webkit-scrollbar-thumb {
            background-color: #4CAF50;
            border-radius: 10px;
        }
        
        .eng-nav-btn {
            padding: 0.65rem 1rem;
            font-size: 0.9rem;
        }
        
        .eng-content-section {
            padding: 1.25rem;
        }
        
        .eng-section-title {
            font-size: 1.5rem;
        }
    }
</style>

<div class="eng-menu-container">
    <div class="eng-menu-header">
        <h1 class="eng-menu-title">Curso de Inglés Básico</h1>
        <p class="eng-menu-subtitle">Selecciona una categoría para aprender</p>
    </div>
    
    <div class="eng-nav-menu">
        <button class="eng-nav-btn active" data-target="section-greetings">Saludos</button>
        <button class="eng-nav-btn" data-target="section-introductions">Presentaciones</button>
        <button class="eng-nav-btn" data-target="section-personal-info">Información Personal</button>
        <button class="eng-nav-btn" data-target="section-alphabet">Alfabeto/Números</button>
        <button class="eng-nav-btn" data-target="section-grammar">Gramática Básica</button>
        <button class="eng-nav-btn" data-target="section-family">Familia/Amigos</button>
        <button class="eng-nav-btn" data-target="section-routines">Rutinas Diarias</button>
        <button class="eng-nav-btn" data-target="section-places">Lugares/Direcciones</button>
        <button class="eng-nav-btn" data-target="section-food">Comida/Bebidas</button>
        <button class="eng-nav-btn" data-target="section-descriptions">Descripciones</button>
        <button class="eng-nav-btn" data-target="section-hobbies">Hobbies</button>
        <button class="eng-nav-btn" data-target="section-weather">Clima</button>
    </div>
    
    <!-- Secciones de contenido -->
    <div id="section-greetings" class="eng-content-section active">
        <h2 class="eng-section-title">Saludos y Despedidas</h2>
        <div class="eng-section-content">
        <x-secction-a1.a1-1a/>
               
        <x-secction-a1.a1-1/>
           
        </div>
    </div>
    
    <div id="section-introductions" class="eng-content-section">
        <h2 class="eng-section-title">Presentaciones Personales</h2>
        <div class="eng-section-content">
        <x-secction-a1.a1-2/>
        </div>
    </div>
    
    <div id="section-personal-info" class="eng-content-section">
        <h2 class="eng-section-title">Información Básica</h2>
        <div class="eng-section-content">
        <x-secction-a1.a1-3/>
        </div>
    </div>
    
    <!-- Resto de las secciones con el mismo patrón -->
    <div id="section-alphabet" class="eng-content-section">
        <h2 class="eng-section-title">Alfabeto y Números</h2>
        <div class="eng-section-content">
        <x-secction-a1.a1-4/>
        </div>
    </div>
    
    <div id="section-grammar" class="eng-content-section">
        <h2 class="eng-section-title">Gramática Básica</h2>
        <div class="eng-section-content">
        <x-secction-a1.a1-5/>
        <x-secction-a1.a1-5a/>
        </div>
    </div>

    <div id="section-family" class="eng-content-section">
        <h2 class="eng-section-title">Familia/Amigos</h2>
        <div class="eng-section-content">
        <x-secction-a1.a1-6/>
        </div>
    </div>
    
    <!-- Las demás secciones seguirían el mismo patrón -->
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.eng-nav-btn');
        const sections = document.querySelectorAll('.eng-content-section');
        
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                // Remover clase active de todos los botones
                buttons.forEach(btn => btn.classList.remove('active'));
                
                // Añadir clase active al botón clickeado
                button.classList.add('active');
                
                // Ocultar todas las secciones
                sections.forEach(section => section.classList.remove('active'));
                
                // Mostrar la sección correspondiente
                const targetId = button.getAttribute('data-target');
                document.getElementById(targetId).classList.add('active');
            });
        });
    });
</script>