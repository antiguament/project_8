<style>
    /* Clases únicas con prefijo 'eng-a1-' para evitar colisiones */
    .eng-a1-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin: 0 auto;
        font-family: Arial, sans-serif;
    }
    
    .eng-a1-topics-container {
        width: 100%;
        background: #f8f9fa;
        padding: 15px;
        box-sizing: border-box;
    }
    
    .eng-a1-content-container {
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
        border-top: 1px solid #ddd;
    }
    
    .eng-a1-topics-list h2 {
        color: #333;
        margin-bottom: 15px;
        font-size: 1.5rem;
    }
    
    .eng-a1-topic-item {
        padding: 12px 15px;
        margin: 8px 0;
        background: #e9ecef;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .eng-a1-topic-item:hover {
        background: #dee2e6;
        transform: translateX(5px);
    }
    
    .eng-a1-active-topic {
        background: #007bff;
        color: white;
        font-weight: bold;
    }
    
    .eng-a1-default-message {
        color: #666;
        font-style: italic;
        text-align: center;
        margin-top: 30px;
    }
    
    .eng-a1-error-message {
        color: #dc3545;
        text-align: center;
        margin-top: 30px;
    }
    
    /* Diseño responsive para pantallas más grandes */
    @media (min-width: 768px) {
        .eng-a1-container {
            flex-direction: row;
            height: auto;
            max-width: 1200px;
        }
        
        .eng-a1-topics-container {
            width: 30%;
            height: 100vh;
            overflow-y: auto;
            position: sticky;
            top: 0;
        }
        
        .eng-a1-content-container {
            width: 70%;
            border-top: none;
            border-left: 1px solid #ddd;
            min-height: 100vh;
        }
    }
</style>

<!-- Sección contenedora con clases únicas -->
<section class="eng-a1-container">
    <!-- Contenedor de temas -->
    <div class="eng-a1-topics-container">
        <div class="eng-a1-topics-list">
            <h2>English A1 Topics</h2>
            
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic(event, 'a1-1')">1. Greetings & Farewells</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic(event, 'a1-2')">2. Introductions</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic(event, 'a1-3')">3. Personal Information</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic(event, 'a1-4')">4. Alphabet & Numbers</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic(event, 'a1-5')">5. Basic Grammar</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic(event, 'a1-6')">6. Family & Friends</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic(event, 'a1-7')">7. Time & Daily Routines</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic(event, 'a1-8')">8. Places & Directions</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic(event, 'a1-9')">9. Food & Drinks</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic(event, 'a1-10')">10. Physical Descriptions</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic(event, 'a1-11')">11. Hobbies & Free Time</div>
            <div class="eng-a1-topic-item" onclick="loadEngA1Topic(event, 'a1-12')">12. Weather</div>
        </div>
    </div>
    
    <!-- Contenedor de contenido -->
    <div class="eng-a1-content-container" id="engA1ContentDisplay">
        <p class="eng-a1-default-message">Select a topic from the list to view its content.</p>
    </div>
</section>

<script>
async function loadEngA1Topic(event, topicId) {
    // Remover clase activa de todos los items
    document.querySelectorAll('.eng-a1-topic-item').forEach(item => {
        item.classList.remove('eng-a1-active-topic');
    });

    // Agregar clase activa al item seleccionado
    event.currentTarget.classList.add('eng-a1-active-topic');

    try {
        // Cargar el componente
        const response = await fetch(`/load-component/${topicId}`);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const html = await response.text();

        // Insertar el HTML
        const container = document.getElementById('engA1ContentDisplay');
        container.innerHTML = html;

        // Ejecutar los scripts dentro del contenido cargado
        const scripts = container.querySelectorAll('script');
        scripts.forEach(script => {
            // Crear un nuevo script
            const newScript = document.createElement('script');
            
            // Copiar todos los atributos
            Array.from(script.attributes).forEach(attr => {
                newScript.setAttribute(attr.name, attr.value);
            });
            
            // Copiar el contenido
            newScript.textContent = script.textContent;
            
            // Eliminar el script original
            script.parentNode.removeChild(script);
            
            // Añadir el nuevo script al head para ejecutarlo
            document.head.appendChild(newScript).parentNode.removeChild(newScript);
        });

    } catch (error) {
        console.error('Error loading component:', error);
        document.getElementById('engA1ContentDisplay').innerHTML =
            '<p class="eng-a1-error-message">Error loading content. Please try again.</p>';
    }
}
</script>