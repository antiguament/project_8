<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Imagen</title>
</head>
<body>
    <h1>Imagen Subida</h1>
    @if(isset($imagePath))
        <img src="{{ Storage::url($imagePath) }}" alt="Imagen subida" style="max-width: 100%; height: auto;">
    @else
        <p>No hay imagen para mostrar.</p>
    @endif
</body>
</html>