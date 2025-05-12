<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="storage/css/globals.css" />
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
</body>
</html>
