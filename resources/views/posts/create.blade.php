<x-layout>
    <h1>Add Shopping list</h1>


<form method="POST" action="/store">
        @csrf
        <label>
            Name of the product:
            <input name="name">
        </label>
        <label>
            Amount of the product:
            <input name="amount">
        </label>
        <button>Create</button>
    </form>
</x-layout>