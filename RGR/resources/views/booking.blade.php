<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="storage/css/globals.css" />
    <link rel="stylesheet" href="storage/css/style_booking.css" />
    <link rel="stylesheet" href="/storage/css/style_menu.css" />
</head>
<body>
<div class="screen">
    <div class="div">
        <div class="view">
            <div class="overlap">
                <img class="mint" src="/storage/img/mint.svg" />
                <img class="orange" src="/storage/img/orange.svg" />
                <div class="div-2">
                    <div class="overlap-group-wrapper">
                        <div class="overlap-group">
                            <div class="image"></div>
                            <div class="text-wrapper">Стол</div>
                            <img class="arrow" src="/storage/img/Arrow.svg" />
                        </div>
                    </div>
                    <div class="overlap-wrapper">
                        <div class="overlap-2">
                            <div class="image-2"></div>
                            <div class="text-wrapper-2">Мероприятие</div>
                            <img class="arrow" src="/storage/img/Arrow.svg" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-2">
                <div class="text-wrapper-3">sirocco.</div>
                <div class="group" onclick="toggleMenu()">
                    <img class="line-1" src="/storage/img/line.png" />
                    <img class="line-1" src="/storage/img/line.png" />
                    <img class="line-1" src="/storage/img/line.png" />
                </div>
                <p class="p">+7 (978) 111 11 11</p>
                <div class="frame_booking"><div class="text-wrapper-100">Бронировать</div></div>
            </div>
        </div>
        <div class="view-wrapper">
            <div class="view-3">
                <div class="group-2">
                    <div class="text-wrapper-5">Главная</div>
                    <div class="text-wrapper-6">О нас</div>
                </div>
                <div class="group-3">
                    <div class="text-wrapper-7">Бронировать стол</div>
                    <div class="text-wrapper-8">Заказать банкет</div>
                    <div class="text-wrapper-5">Оставить отзыв</div>
                </div>
                <div class="group-4">
                    <div class="text-wrapper-5">Контакты</div>
                    <div class="text-wrapper-7">+7 (978) 111 11 11</div>
                    <img class="text-wrapper-8" src="storage/img/tg.png" />
                    <img class="text-wrapper-8-1" src="storage/img/vk.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="div-wrapper_00 hidden" id="myMenu">
    <div class="overlap-group-wrapper_501">
        <div class="overlap-group_501">
            <img class="vector_501" src="/storage/img/cancel.svg" onclick="closeMenu()"/>
            <div class="view-501">
                <div class="text-wrapper-501">О НАС</div>
                <div class="div-501">МЕНЮ</div>
                <div class="text-wrapper-2-501">ГЛАВНАЯ</div>
                <div class="text-wrapper-3-501">КОНТАКТЫ</div>
                <div class="text-wrapper-4-501">БРОНИРОВАТЬ</div>
                <img class="line-501" src="/storage/img/line-5.svg" />
            </div>
            <div class="view-2-501">
                <div class="text-wrapper-5-501">Контакты</div>
                <div class="text-wrapper-6-501">en\ru</div>
                <img class="img-501" src="/storage/img/line-6.png" />
                <p class="element-info-501">+7 (978) 111 11 11<br />info@sirocco.ru</p>
                <img class="path-501" src="/storage/img/vk.png" />
                <img class="vector-3-501" src="/storage/img/tg.png" />
            </div>
        </div>
    </div>
</div>
<script>
    function toggleMenu() {
        const menu = document.getElementById("myMenu");
        menu.classList.toggle("hidden");
    }
    function closeMenu(){
        const menu = document.getElementById("myMenu");
        menu.classList.add("hidden"); // просто скрываем меню
    }
</script>

</body>
</html>
