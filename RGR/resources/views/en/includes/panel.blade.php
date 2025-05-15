@section('panel')
    <link rel="stylesheet" href="storage/css/style_panel.css" />
<div class="view-2-panel">
    <a href="{{route('welcome')}}" class="text-wrapper-3-panel">sirocco.</a>
    <div class="group-panel" onclick="toggleMenu()">
        <img class="line-1" src="/storage/img/line.png" />
        <img class="line-1" src="/storage/img/line.png" />
        <img class="line-1" src="/storage/img/line.png" />
    </div>
    <p class="p-panel">+7 (978) 111 11 11</p>
    <a href="{{route('booking')}}" class="frame_booking-panel"><div class="text-wrapper-100-panel">Book</div></a>
</div>
