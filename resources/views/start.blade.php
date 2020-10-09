@extends('layouts.app')

@section('content')


    <prop-component :urldata="{{ json_encode($url_data) }}"></prop-component>

@endsection
