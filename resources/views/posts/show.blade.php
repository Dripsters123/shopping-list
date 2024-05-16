
<x-layout>
    <title>{{ $post -> title }}</title>
    <h1 class="h1-pages">{{ $post -> name }}: {{ $post -> amount }}</h1>
    <a class="show-a" href="/edit/{{ $post->id }}">Interact with the product</a>

</x-layout>
