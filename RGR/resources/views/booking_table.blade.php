<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="storage/css/globals.css" />
    <link rel="stylesheet" href="storage/css/style_booking_table.css" />
    <link rel="stylesheet" href="storage/css/style_menu.css" />
</head>
<body>
<div class="screen">
    <div class="div">
        <div class="view">
            <div class="overlap">
                <div class="overlap-group">
                    <img class="avocado" src="storage/img/avocado.svg" />
                    <div class="overlap-group-wrapper">
                        <div class="overlap-group-2">
                            <div class="div-wrapper"><div class="text-wrapper">Телефон</div></div>
                            <div class="view-2"><div class="text-wrapper-2">Бронировать</div></div>
                            <div class="group">
                                <div class="view-3">
                                    <div class="text-wrapper">Выберите ваш город</div>
                                    <img class="vector" src="img/vector.svg" />
                                </div>
                                <div class="view-4"><div class="text-wrapper">Ваше Имя</div></div>
                                <div class="view-5"><div class="text-wrapper">ХХ\ХХ\ХХ</div></div>
                                <div class="view-6"><div class="text-wrapper">Кол-во персон</div></div>
                                <div class="view-7"><div class="text-wrapper">Ваша Фамилия</div></div>
                                <div class="view-8"><div class="text-wrapper">E-mail</div></div>
                                <div class="view-9">
                                    <div class="text-wrapper">Время</div>
                                    <p class="p">*1 бронь = 1.5 часа</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-wrapper-3">Бронировать стол</div>
            </div>
            <div class="view-10">
                <div class="text-wrapper-4">sirocco.</div>
                <div class="group-2" onclick="toggleMenu()">
                    <img class="line-1" src="/storage/img/line.png" />
                    <img class="line-1" src="/storage/img/line.png" />
                    <img class="line-1" src="/storage/img/line.png" />
                </div>
                <p class="text-wrapper-5">+7 (978) 111 11 11</p>
                <div class="frame_booking"><div class="text-wrapper-100">Бронировать</div></div>
            </div>
        </div>
        <div class="view-wrapper">
            <div class="view-11">
                <div class="group-3">
                    <div class="text-wrapper-7">Главная</div>
                    <div class="text-wrapper-8">О нас</div>
                </div>
                <div class="group-4">
                    <div class="text-wrapper-9">Бронировать стол</div>
                    <div class="text-wrapper-10">Заказать банкет</div>
                    <div class="text-wrapper-7">Оставить отзыв</div>
                </div>
                <div class="group-5">
                    <div class="text-wrapper-7">Контакты</div>
                    <div class="text-wrapper-9">+7 (978) 111 11 11</div>
                    <img class="text-wrapper-10" src="storage/img/tg.png" />
                    <img class="text-wrapper-10-1" src="storage/img/vk.png" />
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
