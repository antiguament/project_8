<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $request)
    {

        
        // Validar la imagen
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Guardar la imagen en el almacenamiento
        $imagePath = $request->file('image')->store('images', 'public');
        
        // Opcional: Guardar la ruta de la imagen en la base de datos
        // Por ejemplo, si tienes un modelo `Image`:
        // Image::create(['path' => $imagePath]);

        return redirect()->back()->with('success', 'Imagen subida correctamente.');
    }
}