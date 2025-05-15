@extends('layouts.app')
@section('title-block')Booking of the event @endsection

@section('content')
    <link rel="stylesheet" href="storage/css/style_booking_event.css" />
    <form action="/booking_event_form" method="POST" class="view">
        @csrf
        <div class="overlap">
            <div class="overlap-group">
                <img class="leaf" src="/storage/img/leaf_1.svg" />

                <div class="div-wrapper">
                    <input type="tel" name="phone" placeholder="Telephone" class="text-wrapper-3" />
                </div>

                <div class="view-3">
                    <input type="text" name="date_code" placeholder="ХХ\ХХ\ХХ" class="text-wrapper-3" />
                </div>

                <div class="view-4">
                    <input type="text" name="duration" placeholder="Duration" class="text-wrapper-3" />
                </div>

                <div class="view-5">
                    <input name="notes" placeholder="Note..." class="text-wrapper-3"></input>
                </div>

                <div class="view-6">
                    <input type="text" name="event_type" placeholder="Type of event" class="text-wrapper-3" />
                    <div class="text-wrapper-4">*Wedding, etc.</div>
                </div>

                <p class="text-wrapper-5">
                    After ordering, the restaurant administrator will contact you to clarify the information.
                </p>
            </div>

            <div class="view-7">
                <button type="submit" class="text-wrapper-6">Book</button>
            </div>

            <div class="view-8">
                <input type="number" name="person_count" placeholder="Number of persons" class="text-wrapper-3" />
            </div>

            <div class="view-9">
                <select name="hall" class="text-wrapper-3">
                    <option value="">Choose a gym</option>
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

        <div class="text-wrapper-7">Order an event</div>

        <div class="view-12">
            <select name="city" class="text-wrapper-3">
                <option value="">Pick your own city pls</option>
                <option value="Севастополь">Sevastopol</option>
                <option value="Симферополь">Simferopol</option>
                <option value="Ялта">Ялта</option>
            </select>
            <img class="vector" src="storage/img/down.svg" />
        </div>

        <div class="view-13">
            <input type="text" name="first_name" placeholder="Your name" class="text-wrapper-3" />
        </div>

        <div class="view-14">
            <input type="text" name="last_name" placeholder="Your Last name" class="text-wrapper-3" />
        </div>
    </form>
@endsection
