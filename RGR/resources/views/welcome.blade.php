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
    });
</script>

<link rel="stylesheet" href="storage/css/style_index.css" />
<div class="view-3">
    <div class="view-4">
        <div class="overlap-3">
            <p class="SIROCCO">SIROCCO - дух Средиземноморья<br />на побережье Крыма</p>
            <div class="overlap-group-3">
                <img class="leaf" src="storage/img/leaf.svg" />
                <div class="view-6">
                    <img class="element-2" src="storage/img/1.png" />
                    <img class="element-3" src="storage/img/2.png" />
                    <img class="element-4" src="storage/img/3.png" />
                </div>
            </div>
        </div>
    </div>
    <script>
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
        });
    </script>

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
                    <div class="p">
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
        <img class="vector" src="storage/img/right.svg" />
    </div>
    <div class="text-wrapper-7" id="text-wrapper-7">Отзывы посетителей</div>
    <img class="vector-2" src="storage/img/left.svg" />
</div>
    {{--<div class="overlap-wrapper">
        <div class="frame-wrapper">
            <div class="frame-3">
                <div class="text-wrapper-17">Наши адреса</div>
                <div class="group-5">
                    <div class="text-wrapper-18">Севастополь</div>
                    <div class="text-wrapper-19">Большая Морская, 14</div>
                </div>
                <div class="group-6">
                    <div class="text-wrapper-18">Симферополь</div>
                    <div class="text-wrapper-19">Севастопольская, 21</div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
