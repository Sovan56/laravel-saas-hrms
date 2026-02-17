<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HRMS Pro – SaaS HRMS</title>

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <!-- Font Awesome 6 (free) for premium icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Tailwind (via existing style block, but we add a few extras) -->
    <style>
        /*! tailwindcss v3.3.3 | MIT License | https://tailwindcss.com */
        /* (The existing massive style block is kept here; we'll just extend it with a few utilities if needed) */
        *, ::before, ::after { box-sizing: border-box; border-width: 0; border-style: solid; border-color: #e5e7eb; }
        ::before, ::after { --tw-content: ''; }
        html { line-height: 1.5; -webkit-text-size-adjust: 100%; -moz-tab-size: 4; tab-size: 4; font-family: Figtree, sans-serif; font-feature-settings: normal; }
        body { margin: 0; line-height: inherit; }
        hr { height: 0; color: inherit; border-top-width: 1px; }
        abbr:where([title]) { -webkit-text-decoration: underline dotted; text-decoration: underline dotted; }
        h1, h2, h3, h4, h5, h6 { font-size: inherit; font-weight: inherit; }
        a { color: inherit; text-decoration: inherit; }
        b, strong { font-weight: bolder; }
        code, kbd, pre, samp { font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; font-size: 1em; }
        small { font-size: 80%; }
        sub, sup { font-size: 75%; line-height: 0; position: relative; vertical-align: baseline; }
        sub { bottom: -0.25em; }
        sup { top: -0.5em; }
        table { text-indent: 0; border-color: inherit; border-collapse: collapse; }
        button, input, optgroup, select, textarea { font-family: inherit; font-size: 100%; font-weight: inherit; line-height: inherit; color: inherit; margin: 0; padding: 0; }
        button, select { text-transform: none; }
        [type='button'], [type='reset'], [type='submit'], button { -webkit-appearance: button; background-color: transparent; background-image: none; }
        :-moz-focusring { outline: auto; }
        :-moz-ui-invalid { box-shadow: none; }
        progress { vertical-align: baseline; }
        ::-webkit-inner-spin-button, ::-webkit-outer-spin-button { height: auto; }
        [type='search'] { -webkit-appearance: textfield; outline-offset: -2px; }
        ::-webkit-search-decoration { -webkit-appearance: none; }
        ::-webkit-file-upload-button { -webkit-appearance: button; font: inherit; }
        summary { display: list-item; }
        blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre { margin: 0; }
        fieldset { margin: 0; padding: 0; }
        legend { padding: 0; }
        menu, ol, ul { list-style: none; margin: 0; padding: 0; }
        textarea { resize: vertical; }
        input::placeholder, textarea::placeholder { opacity: 1; color: #9ca3af; }
        [role="button"], button { cursor: pointer; }
        :disabled { cursor: default; }
        audio, canvas, embed, iframe, img, object, svg, video { display: block; vertical-align: middle; }
        img, video { max-width: 100%; height: auto; }
        [hidden] { display: none; }
        *, ::before, ::after { --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; }
        ::backdrop { --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; }
        .container { width: 100%; margin-right: auto; margin-left: auto; padding-right: 1rem; padding-left: 1rem; }
        @media (min-width: 640px) { .container { max-width: 640px; } }
        @media (min-width: 768px) { .container { max-width: 768px; } }
        @media (min-width: 1024px) { .container { max-width: 1024px; } }
        @media (min-width: 1280px) { .container { max-width: 1280px; } }
        @media (min-width: 1536px) { .container { max-width: 1536px; } }
        .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0, 0, 0, 0); white-space: nowrap; border-width: 0; }
        .pointer-events-none { pointer-events: none; }
        .fixed { position: fixed; }
        .absolute { position: absolute; }
        .relative { position: relative; }
        .sticky { position: sticky; }
        .inset-0 { inset: 0px; }
        .top-0 { top: 0px; }
        .z-10 { z-index: 10; }
        .z-20 { z-index: 20; }
        .mx-auto { margin-left: auto; margin-right: auto; }
        .-mt-px { margin-top: -1px; }
        .mb-4 { margin-bottom: 1rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .mb-8 { margin-bottom: 2rem; }
        .ml-4 { margin-left: 1rem; }
        .mr-1 { margin-right: 0.25rem; }
        .mt-16 { margin-top: 4rem; }
        .mt-4 { margin-top: 1rem; }
        .mt-6 { margin-top: 1.5rem; }
        .mt-8 { margin-top: 2rem; }
        .block { display: block; }
        .inline-block { display: inline-block; }
        .flex { display: flex; }
        .inline-flex { display: inline-flex; }
        .grid { display: grid; }
        .hidden { display: none; }
        .h-16 { height: 4rem; }
        .h-5 { height: 1.25rem; }
        .h-6 { height: 1.5rem; }
        .h-7 { height: 1.75rem; }
        .h-12 { height: 3rem; }
        .h-20 { height: 5rem; }
        .min-h-screen { min-height: 100vh; }
        .w-16 { width: 4rem; }
        .w-5 { width: 1.25rem; }
        .w-6 { width: 1.5rem; }
        .w-7 { width: 1.75rem; }
        .w-12 { width: 3rem; }
        .w-auto { width: auto; }
        .max-w-7xl { max-width: 80rem; }
        .max-w-2xl { max-width: 42rem; }
        .max-w-4xl { max-width: 56rem; }
        .flex-1 { flex: 1 1 0%; }
        .shrink-0 { flex-shrink: 0; }
        .scale-100 { --tw-scale-x: 1; --tw-scale-y: 1; transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }
        .grid-cols-1 { grid-template-columns: repeat(1, minmax(0, 1fr)); }
        .flex-col { flex-direction: column; }
        .items-center { align-items: center; }
        .justify-center { justify-content: center; }
        .justify-between { justify-content: space-between; }
        .gap-4 { gap: 1rem; }
        .gap-6 { gap: 1.5rem; }
        .gap-8 { gap: 2rem; }
        .gap-12 { gap: 3rem; }
        .self-center { align-self: center; }
        .overflow-hidden { overflow: hidden; }
        .rounded-full { border-radius: 9999px; }
        .rounded-lg { border-radius: 0.5rem; }
        .rounded-xl { border-radius: 0.75rem; }
        .rounded-2xl { border-radius: 1rem; }
        .border { border-width: 1px; }
        .border-t { border-top-width: 1px; }
        .border-gray-200 { --tw-border-opacity: 1; border-color: rgb(229 231 235 / var(--tw-border-opacity)); }
        .border-gray-300 { --tw-border-opacity: 1; border-color: rgb(209 213 219 / var(--tw-border-opacity)); }
        .bg-gray-100 { --tw-bg-opacity: 1; background-color: rgb(243 244 246 / var(--tw-bg-opacity)); }
        .bg-white { --tw-bg-opacity: 1; background-color: rgb(255 255 255 / var(--tw-bg-opacity)); }
        .bg-white\/80 { background-color: rgb(255 255 255 / 0.8); }
        .bg-red-50 { --tw-bg-opacity: 1; background-color: rgb(254 242 242 / var(--tw-bg-opacity)); }
        .bg-red-600 { --tw-bg-opacity: 1; background-color: rgb(220 38 38 / var(--tw-bg-opacity)); }
        .bg-gradient-to-br { background-image: linear-gradient(to bottom right, var(--tw-gradient-stops)); }
        .from-red-500 { --tw-gradient-from: #ef4444; --tw-gradient-to: rgb(239 68 68 / 0); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to); }
        .to-red-700 { --tw-gradient-to: #b91c1c; }
        .bg-cover { background-size: cover; }
        .bg-center { background-position: center; }
        .p-6 { padding: 1.5rem; }
        .p-8 { padding: 2rem; }
        .px-4 { padding-left: 1rem; padding-right: 1rem; }
        .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
        .px-8 { padding-left: 2rem; padding-right: 2rem; }
        .py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem; }
        .py-3 { padding-top: 0.75rem; padding-bottom: 0.75rem; }
        .py-4 { padding-top: 1rem; padding-bottom: 1rem; }
        .py-12 { padding-top: 3rem; padding-bottom: 3rem; }
        .py-16 { padding-top: 4rem; padding-bottom: 4rem; }
        .pt-20 { padding-top: 5rem; }
        .pt-24 { padding-top: 6rem; }
        .pb-12 { padding-bottom: 3rem; }
        .text-center { text-align: center; }
        .text-right { text-align: right; }
        .text-2xl { font-size: 1.5rem; line-height: 2rem; }
        .text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
        .text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
        .text-5xl { font-size: 3rem; line-height: 1; }
        .text-lg { font-size: 1.125rem; line-height: 1.75rem; }
        .text-sm { font-size: 0.875rem; line-height: 1.25rem; }
        .text-xl { font-size: 1.25rem; line-height: 1.75rem; }
        .font-bold { font-weight: 700; }
        .font-extrabold { font-weight: 800; }
        .font-medium { font-weight: 500; }
        .font-semibold { font-weight: 600; }
        .leading-relaxed { line-height: 1.625; }
        .tracking-tight { letter-spacing: -0.025em; }
        .text-gray-500 { --tw-text-opacity: 1; color: rgb(107 114 128 / var(--tw-text-opacity)); }
        .text-gray-600 { --tw-text-opacity: 1; color: rgb(75 85 99 / var(--tw-text-opacity)); }
        .text-gray-700 { --tw-text-opacity: 1; color: rgb(55 65 81 / var(--tw-text-opacity)); }
        .text-gray-800 { --tw-text-opacity: 1; color: rgb(31 41 55 / var(--tw-text-opacity)); }
        .text-gray-900 { --tw-text-opacity: 1; color: rgb(17 24 39 / var(--tw-text-opacity)); }
        .text-red-600 { --tw-text-opacity: 1; color: rgb(220 38 38 / var(--tw-text-opacity)); }
        .text-white { --tw-text-opacity: 1; color: rgb(255 255 255 / var(--tw-text-opacity)); }
        .underline { text-decoration-line: underline; }
        .antialiased { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
        .opacity-0 { opacity: 0; }
        .shadow-lg { --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1); --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color); box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow); }
        .shadow-md { --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1); --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color); box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow); }
        .shadow-sm { --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05); --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color); box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow); }
        .shadow-xl { --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1); --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color); box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow); }
        .ring-1 { --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color); box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000); }
        .ring-black\/5 { --tw-ring-color: rgb(0 0 0 / 0.05); }
        .backdrop-blur { --tw-backdrop-blur: blur(8px); backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia); }
        .transition { transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 150ms; }
        .transition-all { transition-property: all; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 150ms; }
        .duration-300 { transition-duration: 300ms; }
        .ease-in-out { transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }
        .hover\:-translate-y-1:hover { --tw-translate-y: -0.25rem; transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }
        .hover\:bg-red-700:hover { --tw-bg-opacity: 1; background-color: rgb(185 28 28 / var(--tw-bg-opacity)); }
        .hover\:text-gray-700:hover { --tw-text-opacity: 1; color: rgb(55 65 81 / var(--tw-text-opacity)); }
        .hover\:text-gray-900:hover { --tw-text-opacity: 1; color: rgb(17 24 39 / var(--tw-text-opacity)); }
        .hover\:shadow-2xl:hover { --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25); --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color); box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow); }
        .focus\:rounded-sm:focus { border-radius: 0.125rem; }
        .focus\:outline:focus { outline-style: solid; }
        .focus\:outline-2:focus { outline-width: 2px; }
        .focus\:outline-red-500:focus { outline-color: #ef4444; }
        .group:hover .group-hover\:stroke-gray-600 { stroke: #4b5563; }
        @media (min-width: 640px) {
            .sm\:flex { display: flex; }
            .sm\:hidden { display: none; }
            .sm\:max-w-lg { max-width: 32rem; }
            .sm\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .sm\:justify-center { justify-content: center; }
            .sm\:px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
            .sm\:px-8 { padding-left: 2rem; padding-right: 2rem; }
            .sm\:text-left { text-align: left; }
            .sm\:text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
            .sm\:text-5xl { font-size: 3rem; line-height: 1; }
        }
        @media (min-width: 768px) {
            .md\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .md\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .md\:text-6xl { font-size: 3.75rem; line-height: 1; }
        }
        @media (min-width: 1024px) {
            .lg\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .lg\:gap-8 { gap: 2rem; }
            .lg\:px-8 { padding-left: 2rem; padding-right: 2rem; }
        }
        @media (prefers-color-scheme: dark) {
            .dark\:border-gray-700 { --tw-border-opacity: 1; border-color: rgb(55 65 81 / var(--tw-border-opacity)); }
            .dark\:bg-gray-800 { --tw-bg-opacity: 1; background-color: rgb(31 41 55 / var(--tw-bg-opacity)); }
            .dark\:bg-gray-900 { --tw-bg-opacity: 1; background-color: rgb(17 24 39 / var(--tw-bg-opacity)); }
            .dark\:bg-gray-800\/50 { background-color: rgb(31 41 55 / 0.5); }
            .dark\:bg-red-800\/20 { background-color: rgb(153 27 27 / 0.2); }
            .dark\:text-gray-400 { --tw-text-opacity: 1; color: rgb(156 163 175 / var(--tw-text-opacity)); }
            .dark\:text-white { --tw-text-opacity: 1; color: rgb(255 255 255 / var(--tw-text-opacity)); }
            .dark\:ring-white\/5 { --tw-ring-color: rgb(255 255 255 / 0.05); }
            .dark\:hover\:text-white:hover { --tw-text-opacity: 1; color: rgb(255 255 255 / var(--tw-text-opacity)); }
            .group:hover .dark\:group-hover\:stroke-gray-400 { stroke: #9ca3af; }
        }
    </style>
</head>
<body class="antialiased bg-gray-50 text-gray-800 font-figtree">

    <!-- Navigation Bar (sticky, premium look) -->
    <nav class="sticky top-0 z-20 bg-white/80 backdrop-blur border-b border-gray-200 shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo / Brand -->
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-red-500 to-red-700 rounded-lg flex items-center justify-center shadow-md">
                        <span class="text-white font-bold text-lg">HR</span>
                    </div>
                    <span class="font-bold text-xl text-gray-900">HRMS<span class="text-red-600">Pro</span></span>
                </div>

                <!-- Auth Links (exactly as original, only these) -->
                <div class="flex items-center gap-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 transition">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 transition">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight text-gray-900">
                        <span class="block">Streamline your</span>
                        <span class="block text-red-600">HR operations</span>
                    </h1>
                    <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto lg:mx-0">
                        All-in-one SaaS HRMS for employee management, payroll, attendance, and performance — built for modern teams.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        @guest
                            <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-xl text-white bg-gradient-to-br from-red-500 to-red-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 ease-in-out">
                                Get started free
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        @endguest
                        <a href="#features" class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-base font-medium rounded-xl text-gray-700 bg-white hover:bg-gray-50 hover:shadow-md transition-all duration-300">
                            Learn more
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block relative">
                    <!-- Premium abstract illustration / card stack -->
                    <div class="relative h-96 w-full">
                        <div class="absolute top-0 right-0 w-72 h-72 bg-red-100 rounded-2xl shadow-xl rotate-3 transform transition hover:rotate-0 duration-300"></div>
                        <div class="absolute bottom-0 left-0 w-80 h-80 bg-white rounded-2xl shadow-2xl border border-gray-200 p-6 flex flex-col gap-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center"><i class="fas fa-users text-red-600"></i></div>
                                <div><p class="font-semibold">Employee directory</p><p class="text-sm text-gray-500">245 active</p></div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center"><i class="fas fa-calendar-check text-red-600"></i></div>
                                <div><p class="font-semibold">Leave requests</p><p class="text-sm text-gray-500">12 pending</p></div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center"><i class="fas fa-clock text-red-600"></i></div>
                                <div><p class="font-semibold">Attendance</p><p class="text-sm text-gray-500">92% present</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section (id="features") -->
    <section class="py-16 bg-gray-50" id="features">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Everything you need in one place</h2>
                <p class="mt-4 text-xl text-gray-600">Powerful features that simplify HR tasks and empower your workforce.</p>
            </div>
            <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-red-600 mb-6">
                        <i class="fas fa-user-tie text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Employee Database</h3>
                    <p class="mt-2 text-gray-600 leading-relaxed">Centralized profile management with documents, contacts, and job history.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-red-600 mb-6">
                        <i class="fas fa-calendar-alt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Leave & Absence</h3>
                    <p class="mt-2 text-gray-600 leading-relaxed">Automated leave requests, approvals, and balance tracking with calendars.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-red-600 mb-6">
                        <i class="fas fa-wallet text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Payroll Management</h3>
                    <p class="mt-2 text-gray-600 leading-relaxed">Secure and accurate payroll processing with tax calculations and payslips.</p>
                </div>
                <!-- Feature 4 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-red-600 mb-6">
                        <i class="fas fa-clock text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Time & Attendance</h3>
                    <p class="mt-2 text-gray-600 leading-relaxed">Clock-in/out, shift scheduling, and real-time attendance tracking.</p>
                </div>
                <!-- Feature 5 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-red-600 mb-6">
                        <i class="fas fa-chart-line text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Performance Reviews</h3>
                    <p class="mt-2 text-gray-600 leading-relaxed">Customizable appraisal cycles, goal tracking, and feedback tools.</p>
                </div>
                <!-- Feature 6 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-red-600 mb-6">
                        <i class="fas fa-shield-alt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Role-Based Access</h3>
                    <p class="mt-2 text-gray-600 leading-relaxed">Granular permissions for admins, managers, and employees.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA / Stats Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-red-500 to-red-700 rounded-3xl shadow-xl overflow-hidden">
                <div class="px-6 py-12 sm:px-12 lg:py-16 lg:px-16 text-center text-white">
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Join thousands of companies</h2>
                    <p class="text-lg md:text-xl opacity-90 max-w-2xl mx-auto">From startups to enterprises, HRMS Pro scales with your business.</p>
                    <div class="mt-10 grid grid-cols-2 md:grid-cols-3 gap-8 max-w-3xl mx-auto">
                        <div>
                            <div class="text-3xl font-bold">10k+</div>
                            <div class="text-sm uppercase tracking-wider opacity-80">Employees</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold">99.9%</div>
                            <div class="text-sm uppercase tracking-wider opacity-80">Uptime</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold">24/7</div>
                            <div class="text-sm uppercase tracking-wider opacity-80">Support</div>
                        </div>
                    </div>
                    @guest
                    <div class="mt-10">
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-lg font-medium rounded-xl text-red-600 bg-white hover:bg-red-50 transition-all duration-300 shadow-xl">
                            Start your free trial
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-red-500 to-red-700 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-sm">HR</span>
                    </div>
                    <span class="font-semibold text-gray-700">© 2025 HRMS Pro. All rights reserved.</span>
                </div>
                <div class="flex gap-6 text-gray-500">
                    <a href="#" class="hover:text-red-600 transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-red-600 transition"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="hover:text-red-600 transition"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional: smooth scroll for "Learn more" link -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>