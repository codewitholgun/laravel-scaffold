<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeWithOlgun</title>

    <meta name="keywords" content="CodeWithOlgun, https://twitter.com/olgunsoftware, https://codewitholgun.com, https://www.youtube.com/channel/UCH-xplaz-cmloIUkYspcEhQ">
    <!-- Primary Meta Tags -->
    <meta name="title" content="CodeWithOlgun">
    <meta name="description" content="https://www.youtube.com/channel/UCH-xplaz-cmloIUkYspcEhQ">

    <!-- Twitter -->
    <meta property="twitter:url" content="https://twitter.com/olgunsoftware">
    <meta property="twitter:title" content="CodeWithOlgun Youtube: https://www.youtube.com/channel/UCH-xplaz-cmloIUkYspcEhQ">
    <meta property="twitter:description" content="CodeWithOlgun Youtube: https://www.youtube.com/channel/UCH-xplaz-cmloIUkYspcEhQ">
    <meta name="baseUrl" content="{{ asset('/') }}"/>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css?id=' . uniqid()) }}">
    @stack('css')
</head>
<body class="bg-white">

<div class="relative min-h-screen md:flex">
    @include('layouts.partials.sidebar')
    <div class="flex-1">
        @include('layouts.partials.navigation')
        <div class="container mx-auto p-6">
            @yield('content')
        </div>
    </div>
</div>

@yield('footer')
<script>
    const btn = document.querySelector(".mobile-menu-button");
    const sidebar = document.querySelector(".sidebar-menu");
    const sidebarLogo = document.querySelector("#sidebar-logo");

    // add our event listener for the click
    btn.addEventListener("click", () => {
        toggleSideBar(true);
    });

    function toggleSideBar(isMobile = false) {
        if (isMobile) {
            sidebar.classList.toggle("-translate-x-full");
        }

        sidebar.classList.toggle("md:relative");
        sidebar.classList.toggle("md:translate-x-0");
    }
</script>
@stack('js')
</body>
</html>
