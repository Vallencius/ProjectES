@extends('layout.header')

@section('content')
<style>
  .box-res{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 10px;
    padding: 10px;
  }

  hr.new4 {
    border: 1px solid black;
  }

  .box-title{
    text-align: center;
    margin-top: 10px;
    margin-bottom: 10px;
  }


</style>

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
  <div class="box-res"> 
      <h2 style="text-align: center"><strong>{{ $penyakit }} </strong></h1>
      <h3 style="text-align: center">Certainty Value: <strong>{{ $value }} % </strong></h2>
      <hr class="new4" />
      <h3 class="box-title"><strong>Treatment</strong></h3>
        <h4 style="text-align: center">{!! $treatment !!} </h4>
  </div>
</div>
@endsection