<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();






use App\Http\Controllers\ImageController;
Route::get('/show', function () {
    return view('show');
});


use App\Http\Controllers\UploadController;



Route::get('pagina', function () {
    return view('pagina');
}); 

Route::get('/admin/categorias', function () {
    return view('admin/categorias');
})->middleware('auth')->name('admin.categorias');
 
Route::get('/admin/producto', function () {
    return view('admin.producto');
})->middleware('auth')->name('admin.producto');

Route::get('/upload', [UploadController::class, 'index'])->name('upload.index');
Route::post('/upload', [UploadController::class, 'upload'])->name('upload.image');
Route::view('/', 'welcome')->name('welcome');
Route::view('contacto', 'contacto')->name('contacto');


Route::get('blog', [postController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('blog', [postController::class, 'store'])->name('posts.store');

Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');

Route::view('nosotros', 'nosotros')->name('nosotros');
Route::view('leccion-a1', 'leccion-a1')->name('leccion-a1');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/load-component/{topic}', function ($topic) {
    switch ($topic) {
        case 'a1-1':
            return view('components.secction-a1.a1-1a');
        case 'a1-2':
            return view('components.secction-a1.a1-2');
        case 'a1-3':
                return view('components.secction-a1.a1-3');
        // Agrega más casos para cada tema
        default:
            return response('Component not found', 404);
    }
});