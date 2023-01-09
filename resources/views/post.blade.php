<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>
        <a href="">{{$post->category->name}}</a>
        {!! $post->body !!}
    </article>
</x-layout>
