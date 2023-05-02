<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @livewire('component.scripts')
</head>

<body>
    <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
        <br><br><br><br><br>
        <div class="container aside-xxl">
            <a class="navbar-brand block" href="/"><img src="{{ asset('assets/images/logo.png') }}"
                    class="m-r-sm">SIBAGEN</a>
            <section class="panel panel-default m-t-lg bg-white">
                @if (isset($header))
                    <header class="panel-heading text-center">
                        <strong>{{ $header }}</strong>
                    </header>
                @endif
                {{ $slot }}
            </section>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer">
        <div class="text-center padder clearfix">
            <p>
                <small>Sistem Informasi Buku Agenda<br> Badan Kepegawaian & Pengembangan Sumber Daya Aparatur <br>
                    Kabupaten
                    Mamberamo Raya&copy; 2023</small>
            </p>
        </div>
    </footer>
</body>

</html>
