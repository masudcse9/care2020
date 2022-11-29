<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.include.header_links')
</head>

<body id="app-container" class="menu-default show-spinner">
    @include('backend.include.header')
    @include('backend.include.sidebar')
    <main>
        @yield('content')
    </main>
    @include("backend.include.footer")
    @include('backend.include.footer_links')
</body>
</html>
