@extends('layouts.app')
@section('title-block')Бронирование столика@endsection

@section('content')

    <link rel="stylesheet" href="storage/css/style_booking_table.css" />

            <div class="view">
                <div class="overlap">
                    <div class="overlap-group">
                        <img class="avocado" src="storage/img/avocado.svg" />
                        <div class="overlap-group-wrapper">
                            <form action="/booking_table_form" method="POST" class="overlap-group-2">
                                @csrf


                                <div class="group">
                                    <div class="view-3">
                                        <div class="select-wrapper">
                                            <select>
                                                <option>Выберите город</option>
                                                <option>Севастополь</option>
                                                <option>Симферополь</option>
                                                <option>Ялта</option>
                                            </select>
                                        </div>
                                        <img class="vector" src="storage/img/down.svg" />
                                    </div>
                                    <div class="div-wrapper">
                                        <input type="tel" placeholder="Телефон" class="text-wrapper" />
                                    </div>

                                    <div class="view-2">
                                        <button type="submit" class="text-wrapper-2">Бронировать</button>
                                    </div>
                                    <div class="view-4">
                                        <input type="text" placeholder="Ваше Имя" class="text-wrapper" />
                                    </div>

                                    <div class="view-7">
                                        <input type="text" placeholder="Ваша Фамилия" class="text-wrapper" />
                                    </div>

                                    <div class="div-wrapper">
                                        <input type="tel" placeholder="Телефон" class="text-wrapper" />
                                    </div>

                                    <div class="view-8">
                                        <input type="email" placeholder="E-mail" class="text-wrapper" />
                                    </div>

                                    <div class="view-5">
                                        <input type="text" placeholder="XX\XX\XX" class="text-wrapper" />
                                    </div>

                                    <div class="view-9">
                                        <input type="time" class="text-wrapper" />
                                        <div class="p">*1 бронь = 1.5 часа</div>
                                    </div>

                                    <div class="view-6">
                                        <input type="number" placeholder="Кол-во персон" class="text-wrapper" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="text-wrapper-3">Бронировать стол</div>
                </div>
            </div>
@endsection
