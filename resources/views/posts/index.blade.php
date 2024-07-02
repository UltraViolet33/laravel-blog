<x-layout>
    <h1>All posts</h1>
    @foreach ($posts as $post)
    <article>
        <h1>{{ $post->title }}</h1>
    </article>
    @endforeach
</x-layout>