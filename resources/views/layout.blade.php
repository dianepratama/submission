<!doctype html>
<title>@yield('title') - {{ config('app.name') }}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<body class="bg-gradient-to-l from-neutral-50 via-sky-200 to-neutral-50 font-sans">

    <x-navbar> </x-navbar>
    @yield('content')
    <x-footer> </x-footer>
    <x-flash></x-flash>


</body>

</html>
