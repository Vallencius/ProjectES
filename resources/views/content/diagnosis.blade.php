@extends('layout.header')

@section('content')
 <?php 
    $nomor = 1;
 ?>
 <div class="box-header">
    <h3 class="box-title">Halaman Diagnosis</h3>
 
        <div class="box-body">
            <div class="table-responsive">
              <form action={{ route('diagnosis.verify') }} method="POST">
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
                      @csrf
                      @foreach($symptoms as $symptom)
                        <tr>
                          <td>{{$nomor++}}</td>
                          <td>{{ $symptom->KodeGejala }}</td>
                          <td>{{ $symptom->NamaGejala }}</td>
                          <td>
                            <select name="{{ $symptom->KodeGejala }}" id="{{ $symptom->KodeGejala }}" class="form-select">
                              <option value="0" selected>Tidak memiliki gejala</option>
                              <option value="1.0">Definitely</option>
                              <option value="0.8">Almost Certainly</option>
                              <option value="0.6">Probably</option>
                              <option value="0.4">Maybe</option>
                              <option value="-0.2">Unknown</option>
                              <option value="-0.4">Maybe Not</option>
                              <option value="-0.6">Probably Not</option>
                              <option value="-0.8">Almost Certainly Not</option>
                              <option value="-1.0">Definitely Not</option>
                            </select>
                          </td>
                        </tr>
                      @endforeach
                    </form>
                  </tbody>
                </table>
                <button type="submit" class="btn btn-primary">SUBMIT</button>
              </form>
            </div>
          </div>

      </section>
    </div>
</div>
@stop