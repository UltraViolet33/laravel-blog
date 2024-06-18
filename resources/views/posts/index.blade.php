<x-layout>
    <h1>All posts</h1>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="posts/{{ $post->id }}">
                    {{ $post->title }} </a>
            </h1>
        </article>
    @endforeach
</x-layout>
