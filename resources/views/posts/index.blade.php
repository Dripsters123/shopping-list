<x-layout :showButton="$showButton">
    <div class="container">
        <div class="shopli-h1">
            <h1>Shopping List</h1>
        </div>

        <div class="shoplist-items">
            <table>
      @foreach ($posts as $post)
    <tr>
        <td><a href="show/{{$post->id }}">{{$post->name }}: {{$post-> amount }} </a></td>
        <td>
            <form action="/markAsBought/{{$post->id}}" method="POST">
                @csrf
                <input type="checkbox" name="bought" onchange="this.form.submit()" {{$post->bought ? 'checked' : ''}}>
            </form>
        </td>
        <td>
            <form action="/removeItem/{{$post->id}}" method="POST">
                @csrf
                <button type="submit">Remove</button>
            </form>
        </td>
    </tr>
@endforeach


            </table>
        </div>
    </div>
    <form action="/logout" method="POST">
        @csrf
        <button class="logout" type="submit">Logout</button>
    </form>
</x-layout>


