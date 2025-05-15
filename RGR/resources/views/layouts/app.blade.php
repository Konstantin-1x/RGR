<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="storage/css/global.css"/>
    <link rel="stylesheet" href="storage/css/style_menu.css"/>
</head>
<body>
<div class="screen">
    <div class="div">
        @yield('content')
        @if(session('language') =='ru')
            @include('ru.includes.panel')
            @include(('ru.includes.menu'))
            @include(('ru.includes.dno'))
        @else
            @include('en.includes.panel')
            @include(('en.includes.menu'))
            @include(('en.includes.dno'))
        @endif

    </div>
</div>
@if(trim($__env->yieldContent('title-block')) == 'Меню' || trim($__env->yieldContent('title-block')) == 'Menu')
    <style>
        .view-2-panel {
            left: -550px;
        }
    </style>
@endif

</body>
</html>
