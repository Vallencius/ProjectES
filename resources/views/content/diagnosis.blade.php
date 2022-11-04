@extends('layout.header')

@section('content')
 <?php 
    $nomor = 1;
 ?>
 <div class="box-header">
    <h3 class="box-title">Halaman Diagnosis</h3>
 
        <div class="box-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="3%">No</th>
                    <th>Kode</th>
                    <th>Gejala</th>
                    <th>Pilih Kondisi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($symptoms as $symptom)
                        <tr>
                        <td>{{$nomor++}}</td>
                        <td>{{ $symptom->KodeGejala }}</td>
                        <td>{{ $symptom->NamaGejala }}</td>
                        <td>
                            <select name="cars" id="cars">
                                <option value="">Definitely</option>
                                <option value="">Almost Certainly</option>
                                <option value="">Probably</option>
                                <option value="">Maybe</option>
                                <option value="">Unknown</option>
                                <option value="">Maybe Not</option>
                                <option value="">Probably Not</option>
                                <option value="">Almost Certainly Not</option>
                                <option value="">Definitely Not</option>
                            </select>
                        </td>

                        </tr>
                


                    @endforeach
                </tbody>
              </table>
            </div>
          </div>

      </section>
    </div>
</div>
 
@stop