<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pafinur - Breaking Allergy Barriers</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta name="theme-color" content="#1f3677" />
    <link rel="apple-touch-icon" href="{{ asset('/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('/storage/manifest.json') }}">
</head>

<body class="font-sans antialiased bg-[#1f3677] pafinur-body">
    <div class="text-black/50 dark:text-white/50">
        <div
            class="relative min-h-svh flex flex-col items-center justify-between selection:bg-[#1f3677] selection:text-white">
            <livewire:components.pafinur-register />
            <div class="z-10 flex items-start justify-between w-full gap-4 px-12 pt-12">
                <img src="{{ @asset('storage/images/pafinur_logo.png') }}" alt="" srcset=""
                    class="w-[300px]">
                <img src="{{ @asset('storage/images/pafinur_stada_logo.png') }}" alt="" srcset=""
                    class="w-[200px]">

            </div>
            <div class="flex flex-col items-center justify-center w-full pb-20 main-content">
                <div class="flex flex-wrap justify-center gap-4">
                    <livewire:components.register-button />
                </div>

            </div>
            <div class="z-10 flex items-start justify-center w-full gap-4 px-12 pb-20">
                <img src="{{ @asset('storage/images/pafinur-tag.png') }}" alt="" srcset=""
                    class="w-[700px]">
            </div>
        </div>
    </div>
</body>

</html>
