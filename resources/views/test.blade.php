@extends('welcome')
@section('content')
@foreach($data as $value)
{{ $value }}
@endforeach
@stop