<x-layout>
    <h1>Create a post</h1>
    <form action="/posts/store" method="POST">
    @csrf
        <div class="">
            <label for="title">Post title</label>
            <input type="text" name="title">
        </div>
        <div class="">
            <label for="content">Post content</label>
            <textarea name="content"></textarea>
        </div>
        <button type="submit">Store</button>
    </form>
</x-layout>