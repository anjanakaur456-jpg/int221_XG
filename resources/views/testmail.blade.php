<form action="/send-email" method="POST">
    @csrf
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">Send Email</button>
</form>