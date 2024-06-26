<x-layout>
    <h1 class="h1-pages">Add Shopping list</h1>

    <div class="containers">
        <form method="POST" action="/store">
            @csrf
            <div class="input-container">
                <label for="name">Name of the product:</label><br>
                <input type="text" id="name" name="name" oninput="this.value = this.value.replace(/^(.)/, function(txt){return txt.toUpperCase();})"><br>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="amount">Amount of the product:</label><br>
                <input type="number" id="amount" name="amount" min="1"><br>
                @error('amount')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="submit" value="Create">
            </div>
        </form>
    </div>
</x-layout>
