@extends('layouts.app')
@section('title-block')Бронирование мероприятия@endsection

@section('content')
    <link rel="stylesheet" href="storage/css/style_booking_event.css" />
    <form action="/booking_event_form" method="POST" class="view">
        @csrf
        <div class="overlap">
            <div class="overlap-group">
                <img class="leaf" src="/storage/img/leaf_1.svg" />

                <div class="div-wrapper">
                    <input type="tel" name="phone" placeholder="Телефон" class="text-wrapper-3" />
                </div>

                <div class="view-3">
                    <input type="text" name="date_code" placeholder="ХХ\ХХ\ХХ" class="text-wrapper-3" />
                </div>

                <div class="view-4">
                    <input type="text" name="duration" placeholder="Продолжительность" class="text-wrapper-3" />
                </div>

                <div class="view-5">
                    <input name="notes" placeholder="Примечание..." class="text-wrapper-3"></input>
                </div>

                <div class="view-6">
                    <input type="text" name="event_type" placeholder="Вид мероприятия" class="text-wrapper-3" />
                    <div class="text-wrapper-4">*Свадьба и др.</div>
                </div>

                <p class="text-wrapper-5">
                    После заказа с вами свяжется администратор ресторана, чтобы уточнить информацию
                </p>
            </div>

            <div class="view-7">
                <button type="submit" class="text-wrapper-6">Бронировать</button>
            </div>

            <div class="view-8">
                <input type="number" name="person_count" placeholder="Кол-во персон" class="text-wrapper-3" />
            </div>

            <div class="view-9">
                <select name="hall" class="text-wrapper-3">
                    <option value="">Выберите зал</option>
                    <option value="Зал 1">Зал 1</option>
                    <option value="Зал 2">Зал 2</option>
                </select>
                <img class="vector" src="storage/img/down.svg" />
            </div>

            <div class="view-10">
                <input type="email" name="email" placeholder="E-mail" class="text-wrapper-3" />
            </div>

            <div class="view-11">
                <input type="time" name="start_time" class="text-wrapper-3" />
            </div>
        </div>

        <div class="text-wrapper-7">Заказать мероприятие</div>

        <div class="view-12">
            <select name="city" class="text-wrapper-3">
                <option value="">Выберите ваш город</option>
                <option value="Севастополь">Севастополь</option>
                <option value="Симферополь">Симферополь</option>
                <option value="Ялта">Ялта</option>
            </select>
            <img class="vector" src="storage/img/down.svg" />
        </div>

        <div class="view-13">
            <input type="text" name="first_name" placeholder="Ваше Имя" class="text-wrapper-3" />
        </div>

        <div class="view-14">
            <input type="text" name="last_name" placeholder="Ваша Фамилия" class="text-wrapper-3" />
        </div>
    </form>
@endsection
