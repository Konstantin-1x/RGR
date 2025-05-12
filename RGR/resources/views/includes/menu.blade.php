@section('menu')
<div class="div-wrapper_00 hidden" id="myMenu">
    <div class="overlap-group-wrapper_501">
        <div class="overlap-group_501">
            <img class="vector_501" src="/storage/img/cancel.svg" onclick="closeMenu()"/>
            <div class="view-501">
                <a href="{{ route('welcome', ['scroll' => 'text-wrapper-10']) }} " class="text-wrapper-501">О НАС</a>
                <a href="{{route('kitchen')}}" class="div-501">МЕНЮ</a>
                <a href="{{route('welcome')}}" class="text-wrapper-2-501">ГЛАВНАЯ</a>
                <a href="{{route('booking')}}" class="text-wrapper-3-501">БРОНИРОВАТЬ</a>
                <img class="line-501" src="/storage/img/line-5.svg" />
            </div>
            <div class="view-2-501">
                <div class="text-wrapper-5-501">Контакты</div>
                <div class="text-wrapper-6-501">en\ru</div>
                <img class="img-501" src="/storage/img/Line 6.png" />
                <p class="element-info-501">+7 (978) 111 11 11<br />info@sirocco.ru</p>
                <a href="https://t.me/mqweco" target="_blank">
                    <img class="path-501" src="storage/img/tg.png" />
                </a>
                <a href="https://vk.com/mqweco" target="_blank">
                    <img class="vector-3-501" src="storage/img/vk.png" />
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleMenu() {
        const menu = document.getElementById("myMenu");
        menu.classList.toggle("hidden");

        if (!menu.classList.contains("hidden")) {
            document.body.style.overflow = "hidden"; // Отключаем скроллинг
        } else {
            document.body.style.overflow = "auto"; // Включаем скроллинг обратно
        }
    }

    function closeMenu() {
        const menu = document.getElementById("myMenu");
        menu.classList.add("hidden");
        document.body.style.overflow = "auto"; // Включаем скроллинг обратно
    }
</script>


