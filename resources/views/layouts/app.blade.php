<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('description', 'Plain-English legal documents for freelancers, small businesses, and individuals.')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col">

    {{-- Navigation --}}
    <nav class="border-b" style="border-color: var(--border);">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-2 font-semibold text-lg">
                <span style="color: var(--accent);">⌇</span>
                <span>Clausely</span>
            </a>
            <div class="flex items-center gap-6 text-sm">
                <a href="{{ route('about') }}" class="hover:opacity-80" style="color: var(--muted);">About</a>
                <a href="https://github.com/gozling1-pixel/Clausely" target="_blank" rel="noopener" class="hover:opacity-80" style="color: var(--muted);">GitHub</a>
            </div>
        </div>
    </nav>

    {{-- Page content --}}
    <main class="flex-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="border-t mt-24" style="border-color: var(--border);">
        <div class="max-w-6xl mx-auto px-6 py-8 text-sm" style="color: var(--muted);">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <p class="font-medium" style="color: var(--text);">Clausely</p>
                    <p class="mt-1">Plain-English legal documents. Built as a portfolio project.</p>
                </div>
                <div class="text-xs leading-relaxed md:text-right md:max-w-md">
                    <p><span class="badge-warn">Disclaimer</span></p>
                    <p class="mt-2">Clausely generates document drafts. It is not a substitute for legal advice. For complex situations, consult a qualified solicitor.</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>