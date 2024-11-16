<section class="mw5 mw7-ns center bg-light-gray pa3 ph5-ns">
    <h1 class="mt0">Centered Container</h1>
    <p class="lh-copy measure">
        Combine width or max-width values with the center class to create a centered
        container for your content.
    </p>
    @if (Route::has('login'))
        <nav class="flex justify-end">
            @auth
                <a href="{{ url('/dashboard') }}" class="ba b--transparent hover-bg-light-red hover-white pa2 br2">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="ba b--transparent hover-bg-light-red hover-white pa2 br2 mr2">
                    Log in
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ba b--transparent hover-bg-light-red hover-white pa2 br2">
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif

</section>
