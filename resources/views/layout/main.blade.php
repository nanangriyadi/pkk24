<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- FAVICON --}}
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]]">
    <main>
        <div class="min-h-screen bg-gray-100 text-gray-800 ">
            <div class="p-6 space-y-8 ">
                <livewire:navbar>
                    @yield('container')
            </div>


            <livewire:footer>
        </div>
        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        @livewireScripts
</body>

</html>