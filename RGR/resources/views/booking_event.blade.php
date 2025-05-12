@extends('layouts.app')
@section('title-block')Бронирование столика@endsection

@section('content')
    <link rel="stylesheet" href="storage/css/style_booking_event.css" />
    <div class="view">
        <div class="overlap">
            <div class="overlap-group">
                <img class="leaf" src="/storage/img/leaf_1.svg" />
                <div class="div-wrapper"><div class="text-wrapper-3">Телефон</div></div>
                <div class="view-3"><div class="text-wrapper-3">ХХ\ХХ\ХХ</div></div>
                <div class="view-4"><div class="text-wrapper-3">Продолжительность</div></div>
                <div class="view-5"><div class="text-wrapper-3">Дополнительно...</div></div>
                <div class="view-6">
                    <div class="text-wrapper-3">Вид мероприятия</div>
                    <div class="text-wrapper-4">*Свадьба, День рожд. и др.</div>
                </div>
                <p class="text-wrapper-5">
                    После заказа с вами свяжется администратор ресторана, чтобы уточнить информацию
                </p>
            </div>
            <div class="view-7"><div class="text-wrapper-6">Бронировать</div></div>
            <div class="view-8"><div class="text-wrapper-3">Кол-во персон</div></div>
            <div class="view-9">
                <div class="text-wrapper-3">Выберите зал</div>
                <img class="vector" src="img/vector.svg" />
            </div>
            <div class="view-10"><div class="text-wrapper-3">E-mail</div></div>
            <div class="view-11"><div class="text-wrapper-3">Время начала</div></div>
        </div>
        <div class="text-wrapper-7">Заказать мероприятие</div>
        <div class="view-12">
            <div class="text-wrapper-3">Выберите ваш город</div>
            <img class="vector" src="img/image.svg" />
        </div>
        <div class="view-13"><div class="text-wrapper-3">Ваше Имя</div></div>
        <div class="view-14"><div class="text-wrapper-3">Ваша Фамилия</div></div>
    </div>
@endsection
