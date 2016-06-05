@extends('layouts.master')

@section('header')
    @include('welcome.header')
@stop

@section('content')
    @include('welcome.bio')
    @include('welcome.music')
    @include('welcome.shop')
    @include('welcome.contact')
@stop