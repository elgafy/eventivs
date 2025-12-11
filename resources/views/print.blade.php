<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Oilatum - Print</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-[#1f3677] oliatum-body">
    <div class="text-black/50 dark:text-white/50">
        <div
            class="relative min-h-screen flex flex-col items-center justify-start selection:bg-[#1f3677] selection:text-white">
            <livewire:components.register />
            <div class="z-10 flex items-start justify-between w-full gap-4 px-12 py-8">
                <img src="{{ @asset('storage/images/oilatum_50_years_logo.png') }}" alt="" srcset=""
                    class="w-[180px]">
                <img src="{{ @asset('storage/images/oilatum_discover.png') }}" alt="" srcset=""
                    class="w-[500px]">
                <img src="{{ @asset('storage/images/oilatum_logo.png') }}" alt="" srcset=""
                    class="w-[180px]">
            </div>
            <div class="absolute bottom-0 flex items-center justify-center w-full min-h-screen main-content">
                <div class="flex flex-wrap justify-center gap-4">
                    <livewire:components.register-button />
                </div>

            </div>
        </div>
    </div>
</body>

</html>
