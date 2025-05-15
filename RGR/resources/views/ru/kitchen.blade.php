@extends('layouts.app')
@section('title-block')Меню@endsection

@section('content')

<link rel="stylesheet" href="storage/css/style_kitchen.css" />
<div class="overlap-group">
    <img class="blueberry" src="storage/img/blueberry.svg" />
    <img class="tomato" src="storage/img/tomato.svg" />
    <img class="rosemary" src="storage/img/rosemary.svg" />
    <div class="view">
        <div class="text-wrapper">Закуски</div>
        <div class="group">
            <div class="slider1">
                <div class="slides1">
                    <img src="storage/img/Томаты.png" class="slide1 active">
                    <img src="storage/img/Креветки.png" class="slide1">
                </div>
            </div>
            <div class="view-1">
                <div class="text-wrapper-2">Окра и томаты<br />на грилле</div>
                <img class="line" src="storage/img/line_7.png" />
                <div class="text-wrapper-3">400 ₽</div>
            </div>
            <div class="view-2">
                <div class="text-wrapper-4">Огуречный салат</div>
                <img class="img" src="storage/img/line_7.png" />
                <div class="text-wrapper-3">350 ₽</div>
            </div>
            <div class="view-3">
                <div class="text-wrapper-4">Жареные креветки<br />с ростками фасоли</div>
                <img class="img" src="storage/img/line_7.png" />
                <div class="text-wrapper-3">400 ₽</div>
            </div>
        </div>
    </div>
    <div class="view-4">
        <div class="text-wrapper-5">Основные блюда</div>
        <div class="slider2">
            <div class="slides2">
                <img src="storage/img/стейк.png" class="slide2 active">
                <img src="storage/img/треска.png" class="slide2">
            </div>
        </div>
        <div class="view-5">
            <div class="text-wrapper-2">Филе глубоководной<br />трески</div>
            <img class="line" src="storage/img/line_7.png" />
            <div class="text-wrapper-3">900 ₽</div>
        </div>
        <div class="view-6">
            <div class="text-wrapper-4">Стейк с маслом<br />из розмарина</div>
            <img class="img" src="storage/img/line_7.png" />
            <div class="text-wrapper-3">900 ₽</div>
        </div>
        <div class="view-7">
            <div class="text-wrapper-4">Пряный крем-суп <br />из тыквы</div>
            <img class="img" src="storage/img/line_7.png" />
            <div class="text-wrapper-3">750 ₽</div>
        </div>
    </div>
    <div class="view-8">
        <div class="text-wrapper-6">Напитки</div>
        <div class="group-2">
            <div class="view-9">
                <div class="text-wrapper-7">Винные сочетания</div>
                <img class="line-2" src="storage/img/line_7.png" />
                <div class="text-wrapper-8">1700 ₽</div>
            </div>
            <div class="view-10">
                <div class="text-wrapper-4">Напитки на основе <br />вина</div>
                <img class="img" src="storage/img/line_7.png" />
                <div class="text-wrapper-3">950 ₽</div>
            </div>
            <div class="view-11">
                <div class="text-wrapper-4">Безалкогольные <br />напитки</div>
                <img class="img" src="storage/img/line_7.png" />
                <div class="text-wrapper-3">400 ₽</div>
            </div>
            <img class="image-3" src="/storage/img/Нпитки.png" />
        </div>
    </div>
</div>
<script>
    let slideIndex1 = 0;
    const slides1 = document.querySelectorAll(".slide1");

    function showSlide1(index) {
        slides1.forEach((slide, i) => {
            slide.classList.toggle("active", i === index);
        });
        slideIndex1 = index;
    }

    function nextSlide1() {
        slideIndex1 = (slideIndex1 + 1) % slides1.length;
        showSlide1(slideIndex1);
    }

    setInterval(nextSlide1, 3000); // каждые 3 секунды


    let slideIndex2 = 0;
    const slides2 = document.querySelectorAll(".slide2");

    function showSlide2(index) {
        slides2.forEach((slide, i) => {
            slide.classList.toggle("active", i === index);
        });
        slideIndex2 = index;
    }

    function nextSlide2() {
        slideIndex2 = (slideIndex2 + 1) % slides2.length;
        showSlide2(slideIndex2);
    }

    setInterval(nextSlide2, 2500); // каждые 3 секунды
</script>
@endsection
