<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- Head includes meta, styles, fonts, etc. --}}
    @include('partials.head')
    
    {{-- Additional Styles from Child Pages --}}
    @stack('styles')
</head>
<body>
    <div id="app">
        {{-- Header / Navbar --}}
        @include('partials.header')

        {{-- Main Content --}}
        <main>

         <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
            {{-- Flash Messages --}}
            @include('partials.message')



            {{-- Page Content --}}
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('partials.footer')
    </div>

    {{-- Scripts --}}
    @include('partials.script')
    
    {{-- Additional Scripts from Child Pages --}}
    @stack('scripts')
</body>
</html>