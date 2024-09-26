<x-mail::message>
# CORREO POR APROBAR
<x-mail::panel>
Se ha creado un nuevo post que necesita ser aprobado.
</x-mail::panel>
<x-mail::button :url="route('posts.show', $post)" color="success">
    Click aquí para probar
</x-mail::button>
</x-mail::message>