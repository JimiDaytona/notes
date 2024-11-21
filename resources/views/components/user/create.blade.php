<h1>Регистрация</h1>
<form action="{{ route('user.store') }}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="password" name="password">
    <input type="password" name="password_confirmation">
    <input type="submit">
</form>
