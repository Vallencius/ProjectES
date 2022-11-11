@extends('layout.header')

@section('content')
<div class="container">
  <h1>Value: {{ $value }}</h1>
  <h1>Disease: {{ $penyakit }}</h1>
  <h1>Treatment:<br/> {!! $treatment !!}</h1>
</div>
@endsection