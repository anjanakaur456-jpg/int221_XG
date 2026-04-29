<form method="POST" action="/formo">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}">
    <button type="submit">Submit</button>
    </form>