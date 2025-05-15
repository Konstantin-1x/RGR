@extends('layouts.app')
@section('title-block')Booking @endsection

@section('content')

    <link rel="stylesheet" href="storage/css/style_booking.css" />
    <div class="view">
        <div class="overlap">
            <img class="mint" src="/storage/img/mint.svg" />
            <img class="orange" src="/storage/img/orange.svg" />
            <div class="div-2">
                <a href="{{route('booking_table')}}" class="overlap-group-wrapper">
                    <div class="overlap-group">
                        <div class="image"></div>
                        <div class="text-wrapper">Table</div>
                        <img class="arrow" src="/storage/img/Arrow.svg" />
                    </div>
                </a>
                <a href="{{route('booking_event')}}" class="overlap-wrapper">
                    <div class="overlap-2">
                        <div class="image-2"></div>
                        <div class="text-wrapper-2">Booking event</div>
                        <img class="arrow" src="/storage/img/Arrow.svg" />
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
