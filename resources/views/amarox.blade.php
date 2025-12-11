<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Amarox - Registration</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="bg-[#412A5B] text-black/50 dark:text-white/50">
        <div
            class="amarox-body relative min-h-screen flex flex-col items-center justify-start selection:bg-[#412A5B] selection:text-white">
            <livewire:components.amarox-register />
            <livewire:components.feedback />
            <div class="w-full z-10 bg-[#412A5B] flex flex-col items-start justify-center px-6 py-8 gap-4">
                <svg width="169" height="40" viewBox="0 0 169 40" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_3_15)">
                        <path
                            d="M168.71 10.45C168.71 11.92 167.52 13.11 166.05 13.11C164.58 13.11 163.39 11.92 163.39 10.45C163.39 8.98 164.58 7.79 166.05 7.79C167.52 7.79 168.71 8.98 168.71 10.45Z"
                            fill="#EF7E14" />
                        <path
                            d="M167.66 38.7H161.62L154.63 29.62L147.63 38.7H141.59L151.57 25.65L143.2 14.76H149.36L154.63 21.65L159.9 14.76H166.06L157.68 25.65L167.66 38.7Z"
                            fill="white" />
                        <path
                            d="M129.7 14.02C122.66 14.02 116.95 19.73 116.95 26.77C116.95 33.81 122.66 39.52 129.7 39.52C136.74 39.52 142.45 33.81 142.45 26.77C142.45 19.73 136.74 14.02 129.7 14.02ZM129.7 34.57C125.39 34.57 121.9 31.08 121.9 26.77C121.9 22.46 125.39 18.97 129.7 18.97C134.01 18.97 137.5 22.46 137.5 26.77C137.5 31.08 134.01 34.57 129.7 34.57Z"
                            fill="white" />
                        <path
                            d="M17.52 0L0 38.82H5.46L9.64 29.46H25.34L29.64 38.82H35.04L17.52 0ZM11.64 24.99L17.38 12.15L23.28 24.99H11.64Z"
                            fill="white" />
                        <path
                            d="M69.27 21.68V38.82H64.34L64.27 24.8C64.27 24.47 64.27 24.14 64.31 23.81C64.42 22.51 64.46 18.19 60.26 18.57C57.42 18.82 56.08 20.98 55.45 22.78C55.08 23.83 54.91 24.95 54.91 26.06V38.82H49.91V25.67C49.91 25.07 49.94 24.08 49.95 23.47C50.01 21.54 49.49 18.56 45.95 18.56C44.15 18.56 42.82 19.65 41.87 21.04C41.03 22.27 40.61 23.74 40.62 25.23L40.72 38.82H35.64V14.76H40.54L40.57 18.4C42.1 16.38 44.59 14.03 47.87 14.02C53.22 14 54.55 19.2 54.55 19.2C58 13.54 62.34 14.01 62.34 14.01C69.6 14.66 69.26 21.68 69.26 21.68"
                            fill="white" />
                        <path
                            d="M116.21 19.31C109.66 18.03 108.05 23.92 108.05 24.73L108.16 38.81H103.12V14.76H107.99L108.02 19.93C111.8 13.1 114.79 13.81 117.65 14.39L116.22 19.31H116.21Z"
                            fill="white" />
                        <path
                            d="M93.12 14.76L93.08 19.84C91.06 16.35 87.57 14.04 83.59 14.04C77.34 14.04 72.28 19.74 72.28 26.76C72.28 33.78 77.35 39.48 83.59 39.48C87.5 39.48 90.94 37.25 92.98 33.86L92.94 38.81H97.98V14.76H93.11H93.12ZM93.01 29.55C91.88 32.58 88.96 34.73 85.54 34.73C81.14 34.73 77.57 31.16 77.57 26.76C77.57 22.36 81.14 18.79 85.54 18.79C89 18.79 91.95 21 93.05 24.08C93.35 24.92 93.51 25.82 93.51 26.75C93.51 27.68 93.33 28.67 93.01 29.53"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_3_15">
                            <rect width="168.71" height="39.52" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg width="188" height="53" viewBox="0 0 188 53" fill="none"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="188" height="53" fill="url(#pattern0_3_13)" />
                    <defs>
                        <pattern id="pattern0_3_13" patternContentUnits="objectBoundingBox" width="1"
                            height="1">
                            <use xlink:href="#image0_3_13"
                                transform="matrix(0.00273704 0 0 0.00970874 -0.000877918 0)" />
                        </pattern>
                        <image id="image0_3_13" width="366" height="103"
                            xlink:href="data:image/png;base64,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" />
                    </defs>
                </svg>


            </div>
            <div class="absolute bottom-0 flex items-center justify-center w-full min-h-screen main-content">
                <div class="flex flex-col flex-wrap items-center justify-center gap-4 md:flex-row">
                    @if (session('registered') !== true)
                        <livewire:components.register-button />
                    @endif
                    @if (session('registered') == true)
                        <livewire:components.feedback-button />
                    @endif
                    <a href="https://www.saudiamarox.com/" target="_blank">
                        <div
                            class="flex items-start justify-start w-40 h-40 p-4 text-2xl font-bold leading-none text-white bg-[#ef7e14] bg-opacity-70">
                            About Amarox
                        </div>
                    </a>
                    {{-- <a href="{{ @asset('storage/amarox_oncology.pdf') }}" target="_blank">
                        <div
                            class="flex items-start justify-start w-40 h-40 p-4 text-2xl font-bold leading-none text-white bg-[#ef7e14] bg-opacity-70">
                            Oncology
                            Profile
                        </div>
                    </a> --}}
                </div>

            </div>
        </div>
    </div>
</body>

</html>
