<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\PostC;
use App\Models\User;

//------------------COMANDO PHP ARTISAN R:L------------------------------
// Route::get('/', HomeController::class);
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::resource('posts', PostController::class)
        ->names('posts');
//----------------------------PRUEBA-------------------------------------------------------
//Route::get('prueba', function () {
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



    //$post = Post::find(1);
    //dd($post->is_active);
//});
//-----------------------------------------------------------------------------------

Route::get('prueba', function(){
    //--------------------------CREAR USUSARIO-------------------------------
    // User::create([
    //     'name' => 'Daven Avila',
    //     'email' => 'eldaven22@codersfree.com',
    //     'password' => bcrypt('123')
    // ]);
    //----------------------------CREAR TELEFONO------------------------------
    // Phone::create([
    //     'number' => '4432001758',
    //     'user_id' => 1
    // ]);
    //----------------JUNTAR AMBOS VALORES DE USUARIO Y TELEFONO------------------
    // $user = User::where('id', 1)
    //     ->with('phone')
    //     ->first();
    // return $user;
    //-----------------INSERTAR REGISTROS DE POST----------------------
    // PostC::create([
    //     'title' => 'Post 2',
    //     'content' => 'Contenido del post 2'
    // ]);
    // return "Post creado";
    //------------------CREANDO LOS COMENTARIOS---------------------------
    // Comment::create([
    //     'content' => 'Comentario 2',
    //     'post_c_s_id' => 1
    // ]);

    // return "Comentario creado";
    // ----------------------------ACCEDER A LOS COMENTARIOS DE CADA POST------------
    // $post = PostC::find(1);
    // return $post->comments;
    //---------------------ACCEDER A LOS POST A TRAVÉS DE UN COMENTARIO------------
    // $comment = Comment::find(1);
    // return $comment->postC;
    //-----------------------CREAR COMENTARIO YA CON LA RELACIÓN ESTABLECIDA---------
    $post = PostC::find(1);
    $post->comments()->create([
        'content' => 'Un comentario de prueba'
    ]);

    return "comentario creado";
});
