<x-layout>
    <h1 class="h1-pages">Modify Product Details</h1>
    <div class="containers">
    <form method="POST" action="/update/{{ $post->id }}">
        @csrf
        @method('PUT')
        
        <div class="input-container">
            <label for="name">Product Name:</label><br>
            <input type="text" id="name" name="name" value="{{ $post->name }}"><br>
        
        
            <label for="amount">Amount:</label><br>
            <input type="number" id="amount" name="amount" value="{{ $post->amount }}"><br>
    
        
            <input type="submit" value="Update">
        </div>
    
    </form>
    </div>
</x-layout>
