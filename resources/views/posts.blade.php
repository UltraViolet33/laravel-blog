<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="posts/{{ $post->id }}">
                    {{ $post->title }} </a>
            </h1>
            <a href="">{{ $post->category->name }}</a>

            <div>
                <p>{{ $post->excerpt }}</p>
            </div>
        </article>
    @endforeach
</x-layout>
