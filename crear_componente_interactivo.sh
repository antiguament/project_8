#!/bin/bash

# Verifica si se proporcionó un nombre para el componente
if [ -z "$1" ]; then
    echo "Uso: $0 <NombreDelComponente>"
    exit 1
fi

componente_nombre_pascal=$(echo "$1" | sed -e 's/-/\ /g' -e 's/\b\w/\u&/g' -e 's/\ //g')
componente_nombre_kebab=$(echo "$1" | tr '[:upper:]' '[:lower:]' | sed 's/ /-/g')

clase_ruta="app/View/Components/${componente_nombre_pascal}.php"
vista_ruta="resources/views/components/${componente_nombre_kebab}.blade.php"
css_ruta="public/css/components/${componente_nombre_kebab}.css"
js_ruta="public/js/components/${componente_nombre_kebab}.js"

# Crea el directorio de componentes de la clase si no existe
mkdir -p "app/View/Components"

# Crea el archivo de la clase del componente y pregunta por el código
echo "Creando archivo de la clase: $clase_ruta"
echo "Ingrese el código PHP para la clase del componente (termine con una línea que contenga solo 'EOF'):"
cat <<EOF > "$clase_ruta"
<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ${componente_nombre_pascal} extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.${componente_nombre_kebab}');
    }
}
EOF

echo "Clase del componente creada."

# Crea el directorio de vistas de componentes si no existe
mkdir -p "resources/views/components"

# Crea el archivo de la vista del componente y pregunta por el código
echo "\nCreando archivo de la vista: $vista_ruta"
echo "Ingrese el código HTML para la vista del componente (termine con una línea que contenga solo 'EOF'):"
cat <<EOF > "$vista_ruta"
<div>
    </div>
EOF

echo "Vista del componente creada."

# Crea el directorio de CSS del componente si no existe
mkdir -p "public/css/components"

# Crea el archivo CSS del componente y pregunta por el código
echo "\nCreando archivo CSS: $css_ruta"
echo "Ingrese el código CSS para el componente (termine con una línea que contenga solo 'EOF'):"
cat <<EOF > "$css_ruta"

EOF

echo "Archivo CSS creado."

# Crea el directorio de JS del componente si no existe
mkdir -p "public/js/components"

# Crea el archivo JS del componente y pregunta por el código
echo "\nCreando archivo JavaScript: $js_ruta"
echo "Ingrese el código JavaScript para el componente (termine con una línea que contenga solo 'EOF'):"
cat <<EOF > "$js_ruta"

EOF

echo "Archivo JavaScript creado."

echo "\n¡Componente '${componente_nombre_pascal}' creado! Ahora puedes encontrar y editar los archivos."