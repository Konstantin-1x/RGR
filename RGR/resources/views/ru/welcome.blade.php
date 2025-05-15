@extends('layouts.app')
@section('title-block')Главная страница@endsection

@section('content')

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const infoElement = document.querySelector(".element-https-xn");
        const menuItems = document.querySelectorAll(".view-7 div");

        const infoData = {
            "Обслуживание": {!! json_encode($info['Обслуживание'] ?? "Нет данных") !!},
            "Персонал": {!! json_encode($info['Персонал'] ?? "Нет данных") !!},
            "Награды": {!! json_encode($info['Награды'] ?? "Нет данных") !!},
            "Контакты": {!! json_encode($info['Контакты'] ?? "Нет данных") !!}
        };

        const urlParams = new URLSearchParams(window.location.search);
        const scrollTarget = urlParams.get("scroll");

        if (scrollTarget==="contact") {
            const element = document.getElementById(".text-wrapper-15");
            infoElement.innerHTML = infoData["Контакты"];
            document.querySelector(".text-wrapper-15").classList.add("active");
            if (element) {
                setTimeout(() => {
                    element.scrollIntoView({ behavior: "smooth" });
                });
            }
        }
        else {
            // Устанавливаем "Обслуживание" при загрузке
            infoElement.innerHTML = infoData["Обслуживание"];
            document.querySelector(".text-wrapper-12").classList.add("active");
        }
        menuItems.forEach(item => {
            item.addEventListener("click", function () {
                const category = item.innerText.trim();
                if (infoData[category]) {
                    infoElement.innerHTML = infoData[category];
                }

                // Снимаем активный класс у всех
                menuItems.forEach(menuItem => menuItem.classList.remove("active"));

                // Добавляем активный класс к нажатому элементу
                item.classList.add("active");
            });
        });

        let slideIndex = 0;
        const slides = document.querySelectorAll(".slide");
        const dots = document.querySelectorAll(".dot");

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle("active", i === index);
                dots[i].classList.toggle("active", i === index);
            });
            slideIndex = index;
        }

        window.currentSlide = function(index) {
            showSlide(index);
        };

        function nextSlide() {
            slideIndex = (slideIndex + 1) % slides.length;
            showSlide(slideIndex);
        }

        setInterval(nextSlide, 3000); // Автопрокрутка каждые 3 секунды


    });
    function showMap(mapIdToShow) {
        const maps = document.querySelectorAll(".map");
        maps.forEach(map => {
            map.style.display = (map.id === mapIdToShow) ? "block" : "none";
        });
    }



    document.addEventListener("DOMContentLoaded", function() {
        const urlParams = new URLSearchParams(window.location.search);
        const scrollTarget = urlParams.get("scroll");

        if (scrollTarget) {
            const element = document.getElementById(scrollTarget);
            if (element) {
                setTimeout(() => {
                    element.scrollIntoView({ behavior: "smooth" });
                });
            }
        }

        const reviews = @json($reviews);
        let reviewIndex = 0;

        const reviewElement = document.getElementById("reviews");
        const leftBtn = document.getElementById("left");
        const rightBtn = document.getElementById("right");

        function updateReview(index) {
            reviewElement.textContent = reviews[index];
        }

        leftBtn.addEventListener("click", () => {
            reviewIndex = (reviewIndex - 1 + reviews.length) % reviews.length;
            updateReview(reviewIndex);
        });

        rightBtn.addEventListener("click", () => {
            reviewIndex = (reviewIndex + 1) % reviews.length;
            updateReview(reviewIndex);
        });

        // Начальное отображение
        updateReview(reviewIndex);
    });
</script>

<link rel="stylesheet" href="storage/css/style_index.css" />
<div class="view-3">
    <div class="view-4">
        <div class="overlap-3">
            <p class="SIROCCO">SIROCCO - дух Средиземноморья<br />на побережье Крыма</p>
            <div class="overlap-group-3">
                <img class="leaf" src="storage/img/leaf.svg" />
{{--                <div class="view-6">--}}
{{--                    <img class="element-2" src="storage/img/1.png" />--}}
{{--                    <img class="element-3" src="storage/img/2.png" />--}}
{{--                    <img class="element-4" src="storage/img/3.png" />--}}
{{--                </div>--}}

                <div class="slider">
                    <div class="slides">
                        <img src="storage/img/1.png" class="slide active">
                        <img src="storage/img/2.png" class="slide">
                        <img src="storage/img/3.png" class="slide">
                    </div>
                    <div class="dots">
                        <span class="dot active" onclick="currentSlide(0)"></span>
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="div-2">
        <div class="text-wrapper-10" id="text-wrapper-10">О НАС</div>
        <p class="text-wrapper-11">
            Сеть ресторанов на Крымском полуострове приглашает вас в атмосферу средиземноморского уюта и вкуса — один
            шаг, и вы уже на побережье Италии, Греции или Испании. В Севастополе и Симферополе вас ждут изысканные
            блюда из свежих морепродуктов, оливковое масло, вино и тёплая гостеприимность южной Европы.
        </p>
        <div class="view-7">
            <div class="text-wrapper-12">Обслуживание</div>
            <div class="text-wrapper-13">Персонал</div>
            <div class="text-wrapper-14">Награды</div>
            <div class="text-wrapper-15" id=".text-wrapper-15">Контакты</div>
        </div>
        <p class="element-https-xn">
            {!! $info['Контакты'] ?? "Нет данных" !!}
        </p>
        <img class="rosemary" src="storage/img/rosemary.svg" />
    </div>
</div>
<div class="view-2">
    <div class="overlap-group">
        <div class="overlap-2">
            <img class="blueberry" src="storage/img/blueberry.svg" />
            <div class="element">
                <div class="overlap-group-2">
                    <img class="image" src="storage/img/marks.svg"/>
                    <img class="image-2" src="storage/img/marks.svg" />
                    <div class="p" id="reviews">
                        Настоящее погружение в атмосферу Средиземноморья! В Sirocco потрясающая кухня — свежайшие
                        морепродукты, ароматные специи и идеально приготовленные паста и рыба. Обслуживание внимательное, но
                        ненавязчивое. Вернусь сюда ещё не раз!
                    </div>
                </div>
            </div>
            <div class="text-wrapper-5">Оставьте свой отзыв</div>
            <form action="index_form" method="post">
                @csrf
                <textarea
                    class="frame"
                    name="message"
                    placeholder="Попробуйте что-то написать..."
                    onkeydown="if(event.key === 'Enter' && !event.shiftKey) event.preventDefault();"
                ></textarea>
                <button type="submit" class="sentMessage">Отправить</button>
            </form>
        </div>
        <button id="right">
            <img class="vector" src="storage/img/right.svg" />
        </button>

    </div>
    <div class="text-wrapper-7" id="text-wrapper-7">Отзывы посетителей</div>
    <button id="left">
        <img class="vector-2" src="storage/img/left.svg" />
    </button>

    <div class="map" id="map1" >
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6f5c474e32c7263bb8bd5f272c05835d9611e22f70c926f304d59c1ee7e8b132&amp;source=constructor" width="1440" height="726" frameborder="0"></iframe>
    </div>
    <div class="map" id="map2" style="display: none;">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6ea3a99b1aa7dd3578590f1b4d7db79c211dc01983d30e695b7858ce6e993767&amp;source=constructor" width="1440" height="726" frameborder="0"></iframe>
    </div>
    <div class="frame11">
        <div class="text-wrapper">Наши адреса</div>

        <button class="group21" onclick="showMap('map1')">
            <div class="text-wrapper-88">Севастополь</div>
            <div class="text-wrapper-2">Большая Морская, 14</div>
        </button>

        <button class="group-22" onclick="showMap('map2')">
            <div class="text-wrapper-88">Симферополь</div>
            <div class="text-wrapper-2">Севастопольская, 21</div>
        </button>
    </div>
</div>

@endsection
