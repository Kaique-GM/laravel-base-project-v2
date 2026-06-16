<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição aqui">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="Projeto Base">
    <meta property="og:description" content="Descrição aqui">
    <meta property="og:image" content="https://seusite.com/images/printbanner.webp">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="icon" href="/favicon.ico">

    <title>{{ $title ?? 'Meu Projeto' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-zinc-950 text-white min-h-screen flex flex-col">

    <livewire:components.navbar />

    <main class="flex-1 w-full max-w-6xl mx-auto px-6 py-10">
        {{ $slot }}
    </main>

    <livewire:components.float-icons />

    <livewire:components.footer />

    @livewireScripts
</body>

</html>