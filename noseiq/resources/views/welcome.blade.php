<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
           
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 min-vh-100">
        
          
                       
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                 

                    <main class="mt-6 min-h-100 bg-pink">
                        <h1>asdsad</h1>
                    </main>
                </div>
                    <footer class="ph3 ph4-ns pv6 bt b--black-10 black-70 bg-white">
                        <a href="mailto:" class="link b f3 f2-ns dim black-70 lh-solid">hello@email.com</a>
                        <p class="f6 db b ttu lh-solid">© 2016 COMPANY Inc.</p>
                        <div class="mt5">
                          <a href="/language/" title="Language" class="f6 dib pr2 mid-gray dim">Language</a>
                          <a href="/terms/"    title="Terms" class="f6 dib ph2 mid-gray dim">Terms of Use</a>
                          <a href="/privacy/"  title="Privacy" class="f6 dib pl2 mid-gray dim">Privacy</a>
                        </div>
                      </footer>
    </body>
</html>
