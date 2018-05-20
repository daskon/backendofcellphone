@extends('layouts.master')

@section('title')
  SellMyCell || Online Shopping
@endsection

@section('content')

    @include('partials.newproduct')
    @include('partials.newarrival')
    @include('partials.smartphone')
    @include('partials.ourbrand')

@endsection