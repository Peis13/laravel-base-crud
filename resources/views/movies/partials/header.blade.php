<header>
    <div class="navbar">

        {{-- logo --}}
        <div class="logo">
            <span>crud_db</span>
        </div>

        {{-- navigazione --}}
        <nav>
            <ul class="link-route">
                <li>
                    <a href="{{ route('movies.create') }}">inserisci nuovo movie</a>
                </li>
                <li>
                    <a href="{{ route('movies.index') }}">lista movie</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
