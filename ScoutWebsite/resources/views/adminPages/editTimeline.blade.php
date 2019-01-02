@extends('layouts.base')

@section('pageTitle')
Edit timeline
@endsection

@section('content')

<div class="container">
    <div class="row">
        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
            + Add item
        </button>
    </div>
</div>

    {{-- @foreach ($events as $event)
    <div class="container">
        <div class="row row-striped">
            <div class="col-4 text-right">
                <h1 class="display-4"><span class="badge badge-secondary">{{$event->event_date->format('d') }}</span></h1>
                <h2>{{$event->event_date->format('F') }}</h2>
            </div>
            <div class="col-8">
                <h3 class="text-uppercase"><strong>{{$event->event_title}}</strong></h3>
                <ul class="list-inline">
                <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$event->event_start_time}} - {{$event->event_finish_time}}</li><br/>
                <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i>{{$event->event_location}}</li>
                <p>{{$event->event_description}}</p>
            </div>
        </div>
    </div>
    @endforeach --}}

@endsection
@include('adminPages.modalForms.addToTimeline')
