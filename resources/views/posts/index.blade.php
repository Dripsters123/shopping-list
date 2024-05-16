<x-layout :showButton="$showButton">
    <div class="container">
        <div class="shopli-h1">
            <h1>Shopping List</h1>
        </div>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="shoplist-items">
            <table>
                @foreach ($posts as $post)
                    <tr>
                        <td><a href="show/{{$post->id }}">{{$post->name }}: {{$post-> amount }} </a></td>
                        <td>
                            <form action="/removeItem/{{$post->id}}" method="POST">
                                @csrf
                                <button type="submit">Remove</button>
                            </form>
                        </td>
                        <td>
                            <form action="/markAsBought/{{$post->id}}" method="POST">
                                @csrf
                                <input type="checkbox" id="checkbox{{$post->id}}" class="checkbox" name="bought" onchange="this.form.submit()" {{$post->bought ? 'checked' : ''}}>
                                <label for="checkbox{{$post->id}}">{{$post->bought ? '✅' : '❌'}}</label>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="button-container">
        <div class="clear-but">
            <form action="/clearList" method="POST">
                @csrf
                <button type="submit">Clear the list</button>
            </form>
        </div>

        <div class="confirm-clear">
            <form action="/confirmAndClearList" method="POST" id="confirmForm">
                @csrf
                <input type="hidden" name="confirmation" id="confirmationInput">
                <button type="button" id="confirmButton" disabled>Finished!</button>
            </form>
        </div>
    </div>

    <form action="/logout" method="POST">
        @csrf
        <button class="logout" type="submit">Logout</button>
    </form>
</x-layout>

<script>
// Enable the "Bought everything!" button only when all items are checked off
let checkboxes = document.querySelectorAll('input[type="checkbox"]');
let confirmButton = document.getElementById('confirmButton');

function checkAllChecked() {
    if (checkboxes.length === 0) {
        confirmButton.disabled = true;
        confirmButton.style.backgroundColor = 'gray';  // Set button color to gray
        confirmButton.style.cursor = 'default';  // Change cursor to default when button is disabled
        return;
    }
    for (let checkbox of checkboxes) {
        if (!checkbox.checked) {
            confirmButton.disabled = true;
            confirmButton.style.backgroundColor = 'gray';  // Set button color to gray
            confirmButton.style.cursor = 'default';  // Change cursor to default when button is disabled
            return;
        }
    }
    confirmButton.disabled = false;
    confirmButton.style.backgroundColor = '#45a049';  // Set button color to green
    confirmButton.style.cursor = 'pointer';  // Change cursor to pointer when button is enabled
}

checkboxes.forEach(checkbox => checkbox.addEventListener('change', checkAllChecked));
checkAllChecked();  // Initial check

document.getElementById('confirmButton').addEventListener('click', function() {
    let confirmation = confirm("Are you sure you bought everything?");
    if (confirmation) {
        document.getElementById('confirmationInput').value = 'yes';
    } else {
        document.getElementById('confirmationInput').value = 'no';
    }
    document.getElementById('confirmForm').submit();
});

</script>
