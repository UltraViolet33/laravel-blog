<x-layout>
    <h1>All categories</h1>
    @foreach ($categories as $c)
    <article>
        <h1>{{$c->name}}</h1>
    </article>
    @endforeach
</x-layout>