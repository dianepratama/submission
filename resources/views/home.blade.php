@extends('layout')


@section('title')
    Home
@endsection

@section('content')
    <x-slider></x-slider>
    <x-card-section :cardvalue="$cardvalue" :recenthistories="$recenthistories">
    </x-card-section>

    <x-table-section :records="$records"></x-table-section>
@endsection
