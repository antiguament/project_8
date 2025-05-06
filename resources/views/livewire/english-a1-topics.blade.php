<div>












<div>
    
    <div>
    <style>
        /* Todos tus estilos CSS aquí */
        .eng-a1-container { display: flex; flex-direction: column; /* ... */ }
        /* ... mantener todos los estilos originales ... */
    </style>

    <section class="eng-a1-container">
        <!-- Contenedor de temas -->
        <div class="eng-a1-topics-container">
            <div class="eng-a1-topics-list">
                <h2>English A1 Topics</h2>
                
                @foreach($topics as $id => $title)
                    <div class="eng-a1-topic-item {{ $selectedTopic == $id ? 'eng-a1-active-topic' : '' }}" 
                         wire:click="selectTopic('{{ $id }}')">
                        {{ $loop->iteration }}. {{ $title }}
                    </div>
                @endforeach
            </div>
        </div>
        
        <!-- Contenedor de contenido -->
        <div class="eng-a1-content-container" id="engA1ContentDisplay">
            @if($selectedTopic)
                {!! $topicContent !!}
            @else
                <p class="eng-a1-default-message">Select a topic from the list to view its content.</p>
            @endif
        </div>
    </section>
</div>

@push('scripts')
<script>
    // Función para inicializar elementos interactivos
    function initInteractiveElements() {
        // Juego de práctica
        const options = document.querySelectorAll('.game-option');
        const checkBtn = document.getElementById('check-btn');
        const feedback = document.getElementById('feedback');
        
        if (options.length && checkBtn && feedback) {
            let selected = null;
            
            options.forEach(option => {
                option.addEventListener('click', function() {
                    options.forEach(opt => opt.classList.remove('ring-2', 'ring-blue-500'));
                    this.classList.add('ring-2', 'ring-blue-500');
                    selected = this;
                });
            });
            
            checkBtn.addEventListener('click', function() {
                // ... (mantener toda la lógica del juego)
            });
        }
    }

    // Inicializar cuando Livewire esté listo
    document.addEventListener('livewire:load', function() {
        initInteractiveElements();
        
        // Reiniciar cuando cambie el tema
        Livewire.on('topicChanged', () => {
            initInteractiveElements();
        });
    });

    // También inicializar cuando se cargue contenido dinámico
    document.addEventListener('DOMNodeInserted', function(e) {
        if (e.target.id === 'engA1ContentDisplay') {
            initInteractiveElements();
        }
    });
</script>
@endpush




</div>

