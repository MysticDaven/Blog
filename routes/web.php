<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('prueba', function () {
    //--------------------CREAR UN NUEVO POST-------------------------
    // $post = new Post;

    // $post->title = 'TìTULo De prUEbA 4';
    // $post->content = 'Contenido de prueba 4';
    // $post->categoria = 'Categoría de prueba 4';

    // $post->save();
    // return $post;

    //-------------------------ACTUALIZAR REGISTRO-----------------------
    // $post = Post::where('title', 'Titulo de prueba 1')
    //                  ->first();


    // $post->categoria = 'Desarrollo web';
    // $post->save();
    // return $post;

    // ------------------------LISTAR TODOS LOS POST-------------------------
    // $post = Post::orderBy('categoria','asc')
    //                 ->select('id', 'categoria')
    //                 ->take(2)
    //                 ->get();
    // return $post;

    // ---------------------------ELIMINAR UN USARUIO--------------------------
    // $post = Post::find(1);
    // $post->delete();

    // return "Eliminado correctamente";



    $post = Post::find(1);
    dd($post->is_active);
});
