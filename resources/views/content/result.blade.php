@extends('layout.header')

@section('content')
<div class="container">
  <h1 class="text-center">Diagnosys Result</h1>
  <table class="table table-bordered table-striped">
    <tr>
      <th>
        Penyakit
      </th>
      <td>Depression</td>
      <td>PTSD</td>
      <td>Anxiety Disorder</td>
      <td>Schizofrenia</td>
    </tr>
    <tr>
      <th>
        Certainty Value
      </th>
      <td>{{ $CF[0] }} %</td>
      <td>{{ $CF[1] }} %</td>
      <td>{{ $CF[2] }} %</td>
      <td>{{ $CF[3] }} %</td>
    </tr>
  </table>
  <h3>Certainty Value: {{ $value }} %</h3>
  <h3>Disease: {{ $penyakit }}</h3>
  <h3>Treatment:<br/> {!! $treatment !!}</h3>
</div>
@endsection