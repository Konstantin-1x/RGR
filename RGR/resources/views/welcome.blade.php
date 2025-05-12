@extends('layouts.app')
@section('title-block')Главная страница@endsection

@section('content')

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
                    }); // небольшая задержка для надежности
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
            <div class="text-wrapper-15">Контакты</div>
        </div>
        <p class="element-https-xn">
      <span class="span"
      >В каждом ресторане разделен на 3 зоны: <br />главный зал (100 человек);<br />банкетный (до 40
        человек);<br />летняя веранда (24 человека).<br /><br />Также доступна доставка через сервис Крым.Еда:
        <br
        /></span>
            <span class="text-wrapper-16">https://xn----8sbldxm1a2g.xn--p1ai/sevastopol/restaurants/sirocco/</span>
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
            <div class="frame"><div class="text-wrapper-6">Попробуйте что-то написать...</div></div>
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
