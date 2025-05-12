@section('dno')
    <link rel="stylesheet" href="storage/css/style_dno.css" />
    <div class="view-wrapper-dno">
    <div class="view-3-dno">
        <div class="group-2-dno">
            <a href="{{route('welcome')}}" class="text-wrapper-5-dno">Главная</a>
            <a href="{{ route('welcome', ['scroll' => 'text-wrapper-10']) }} " class="text-wrapper-6-dno">О нас</a>
            <a href="{{ route('welcome', ['scroll' => 'text-wrapper-7']) }}" class="text-wrapper-8-dno">Оставить отзыв</a>
        </div>
        <div class="group-3-dno">
            <a href="{{route('kitchen')}}" class="text-wrapper-5-dno">Меню</a>
            <a href="{{route('booking_table')}}" class="text-wrapper-7-dno">Бронировать стол</a>
            <a href="{{route('booking_event')}}" class="text-wrapper-8-dno">Заказать банкет</a>
        </div>
        <div class="group-4-dno">
            <a href="{{ route('welcome', ['scroll' => 'contact']) }} " class="text-wrapper-5-dno">Контакты</a>
            <div class="text-wrapper-7-dno">+7 (978) 111 11 11</div>
            <a href="https://t.me/mqweco" target="_blank">
                <img class="text-wrapper-8-dno" src="storage/img/tg.png" />
            </a>
            <a href="https://vk.com/mqweco" target="_blank">
                <img class="text-wrapper-8-1-dno" src="storage/img/vk.png" />
            </a>

        </div>
    </div>
</div>
