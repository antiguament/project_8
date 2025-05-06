<div class="mi-componente-1">
    <h3>¡Hola, {{ $nombre }}!</h3>

    @if ($esActivo)
        <p class="activo">Este componente está activo.</p>
    @else
        <p class="inactivo">Este componente está inactivo.</p>
    @endif

    <p>Contador: {{ $contador }}</p>

    <div class="contenido">
        {{ $slot }} {{-- Aquí se insertará el contenido del slot principal --}}
    </div>

    @isset($nota)
        <div class="nota">
            <strong>Nota:</strong> {{ $nota }} {{-- Aquí se insertará el contenido del slot llamado "nota" --}}
        </div>
    @endisset
</div>