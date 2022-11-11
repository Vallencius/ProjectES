@extends('layout.header')

@section('content')
<?php $i = 1; ?>
<div class="text-center" style="padding:10px">
  <span>Possible Treatment: </span>
  <button type="button" class="btn btn-primary" id="moreData">Treatment</button>
</div>
<table class="table table-bordered table-striped">
  <thead>
    <th>No.</th>
    <th>Nama</th>
    <th>Penyakit</th>
    <th>Value</th>
  </thead>
  <tbody>
    @foreach($items as $item)
      <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->penyakit }}</td>
        <td>{{ $item->value }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
<div class="modal" id="moreDataModal" style="overflow: scroll; background-color: aliceblue; width: 80vw; margin:auto; height: 80vh; border: solid 1px #000000">
  <div class="text-end">
    <span class="data-close" style="font-size:30px; margin-left: 20px; cursor: pointer">&times;</span>
  </div>
  <h1 class="text-center">Treatment</h1>
  <table class="table table-bordered table-striped" style="margin: 20px">
    <thead>
      <th>Penyakit</th>
      <th>Treatment</th>
    </thead>
    <tbody>
      @foreach($treatments as $treatment)
        <tr>
          <td>{{ $treatment->penyakit }}</td>
          <td>{!! $treatment->treatment !!}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

<script>
  // Get the modal
  var modal = document.getElementById("moreDataModal");

  // Get the button that opens the modal
  var btn = document.getElementById("moreData");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("data-close")[0];
    
  // When the user clicks on the button, open the modal
  btn.onclick = function() {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  //When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
@endsection