@extends('layouts.app')
@section('title-block')Бронирование столика@endsection

@section('content')

    <link rel="stylesheet" href="storage/css/style_booking_table.css" />

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
                                        <img class="vector" src="storage/img/down.svg" />
                                    </div>
                                    <div class="view-4"><div class="text-wrapper">Ваше Имя</div></div>
                                    <div class="view-5"><div class="text-wrapper">ХХ\ХХ\ХХ</div></div>
                                    <div class="view-6"><div class="text-wrapper">Кол-во персон</div></div>
                                    <div class="view-7"><div class="text-wrapper">Ваша Фамилия</div></div>
                                    <div class="view-8"><div class="text-wrapper">E-mail</div></div>
                                    <div class="view-9">
                                        <div class="text-wrapper">Время</div>
                                        <div class="p">*1 бронь = 1.5 часа</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-wrapper-3">Бронировать стол</div>
                </div>
            </div>
@endsection
