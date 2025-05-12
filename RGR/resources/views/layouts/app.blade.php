<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="storage/css/global.css" />
    <link rel="stylesheet" href="storage/css/style_menu.css" />
</head>
<body>
<div class="screen">
    <div class="div">
        @yield('content')
        @include('includes.panel')
        @include(('includes.menu'))
        @include(('includes.dno'))
    </div>
</div>
@if(trim($__env->yieldContent('title-block')) == 'Меню')
    <style>
        .view-2-panel{
            left: -550px;
        }
    </style>
@endif

</body>
</html>
