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

<body class="antialiased min-vh-100">
    <header class="helvetica">
        <div class="cover bg-left bg-center-l">

            <div class=" light-blue">
                <nav class="dt w-100 mw8 center f1-ns f3">
                    <h1>Nose IQ</h1>
                </nav>
            </div>
        </div>
    </header>

    <main class="mt-6 center helvetica">
        <div class="cover bg-left bg-center-l">

            <div class=" light-blue">
                <nav class="dt w-100 mw8 center f-l">
                    <h1>"Copy" Platform for perfumers and brand to connect</h1>
                </nav>
            </div>
        </div>

        <article class="vh-100 dt w-100 bg-gold">
            <div>
                <div class="dt mw6 center pv4 pv5-m pv6-ns">
                    <div class="dtc v-btm">
                      <img src="http://tachyons.io/img/super-wide.jpg" alt="A bright blue sky" class="mw5 db" />
                    </div>
                    <div class="dtc v-btm pl3">
                      <p class="lh-copy mv0">
                        This text is aligned to the bottom, no matter what the height of the image is.
                      </p>
                    </div>
                  </div>
                </div>
         
                
                
                <div class="dtc v-mid tc white ph3 ph4-l">

                <div class="dt mw6 center pv4 pv5-m pv6-ns">
                    <div class="dtc v-btm">
                      <img src="http://tachyons.io/img/super-wide.jpg" alt="A bright blue sky" class="mw5 db" />
                    </div>
                    <div class="dtc v-btm pl3">
                      <p class="lh-copy mv0">
                        This text is aligned to the bottom, no matter what the height of the image is.
                      </p>
                    </div>
                  </div>
                  
                <h1 class="f6 f2-m f-subheadline-l fw6 tc">Text with image</h1>
            </div>
        </div>


           
        </article>


    </main>


    @include('components.auth-links')


    </div>
    <footer class="ph3 ph4-ns pv6  b--black-10 black-70 bg-white">
        <a href="mailto:" class="link b f3 f2-ns dim black-70 lh-solid">hello@email.com</a>
        <p class="f6 db b ttu lh-solid">© 2016 COMPANY Inc.</p>
        <div class="mt5">
            <a href="/language/" title="Language" class="f6 dib pr2 mid-gray dim">Language</a>
            <a href="/terms/" title="Terms" class="f6 dib ph2 mid-gray dim">Terms of Use</a>
            <a href="/privacy/" title="Privacy" class="f6 dib pl2 mid-gray dim">Privacy</a>
        </div>
    </footer>
</body>

</html>
