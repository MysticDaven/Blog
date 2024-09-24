<x-app_layout>
    <h1>Aquí se mostrarán los posts</h1>
    <a href="{{route('posts.create')}}">
        Nuevo Post
    </a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.show', $post->id)}}">
                    {{$post -> title}}
                </a>
            </li>
        @endforeach
    </ul>

    
    {{ $posts->links() }}
</x-app_layout>