<link href="{{ asset('style.css') }}" rel="stylesheet">
<x-layout>
    <title>{{ $post -> title }}</title>
    <h1>{{ $post -> name }} {{ $post -> amount }}</h1>
    <a href="/edit/{{ $post->id }}">Edit</a>

</x-layout>
