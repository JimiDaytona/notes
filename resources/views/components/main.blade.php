<main class="main_cont">
    @auth()
    <div class="side_bar">
        @if(Auth::user()->notes->isEmpty())
            <p>У вас пока нет заметок</p>
        @else
            @foreach(Auth::user()->notes as $note)
                <div class="notes">
                    <h4> {{ $note->title }}</h4>
                    <p> {{ $note->text }} </p>
                    <a href="/del/{{ $note->id }}"> Удалить </a>
                </div>
            @endforeach
        @endif
    </div>

    <form class="form" action='/' method="post" >
        @csrf
        <input class="title_text" type="text" name="title">
        <textarea class="note_text" name="text"></textarea>
        <input class="button" type="submit">
    </form>
        <a href="{{ route('user.logout') }}">Выход</a>
    @else
    <a href="{{ route('register') }}">Регистрация</a>
    <a href="{{ route('user.login') }}">Вход</a>
    @endif
</main>
