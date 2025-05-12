@extends('layouts.app')
@section('title-block')Бронирование@endsection

@section('content')

<link rel="stylesheet" href="storage/css/style_booking.css" />
<div class="view">
    <div class="overlap">
        <img class="mint" src="/storage/img/mint.svg" />
        <img class="orange" src="/storage/img/orange.svg" />
        <div class="div-2">
            <div class="overlap-group-wrapper">
                <div class="overlap-group">
                    <div class="image"></div>
                    <div class="text-wrapper">Стол</div>
                    <img class="arrow" src="/storage/img/Arrow.svg" />
                </div>
            </div>
            <div class="overlap-wrapper">
                <div class="overlap-2">
                    <div class="image-2"></div>
                    <div class="text-wrapper-2">Мероприятие</div>
                    <img class="arrow" src="/storage/img/Arrow.svg" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
