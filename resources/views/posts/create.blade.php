<x-app_layout>
    <h1>Formulario para crear un nuevo post</h1>
    <form action="{{route('posts.store')}}", method="POST">
        @csrf
        <label>
            Título:
            <input type="text" name="title">
        </label>
        <br>
        <br>
        <label>
            Categoría:
            <input type="text" name="category">
        </label>
        <br>
        <br>
        <label>
            Contenido:
            <textarea name="content"></textarea>            
        </label>
        <br>
        <br>
        <button type="submit">Crear Post</button>
    </form>    
</x-app_layout>