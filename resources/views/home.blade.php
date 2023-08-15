@extends('layout')

@section('content')
    <x-carousel></x-carousel>
    <x-card-section></x-card-section>
    <x-table-section :records="$records"></x-table-section>
@endsection
