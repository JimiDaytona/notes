<form action="/loginAuth" method="post">
    @csrf
    <input type="text" name="name">
    <input type="password" name="password">
    <input type="submit">
</form>
