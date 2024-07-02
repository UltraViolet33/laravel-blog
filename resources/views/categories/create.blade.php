<x-layout>
    <h1>Create a category</h1>
    <form action="/categories/store" method="POST">
        @csrf
        <div class="">
            <label for="name">Category name</label>
            <input type="text" name="name">
        </div>
        <button type="submit">Store</button>
    </form>
</x-layout>