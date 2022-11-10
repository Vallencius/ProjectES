@extends('layout.header')

@section('content')
 <?php 
    $nomor = 1;
 ?>
 <div class="box-header">
    <h3 class="box-title">Diagnosys Page</h3>
 
        <div class="box-body">
            <div class="table-responsive">
              <form action={{ route('diagnosis.verify') }} method="POST">
                <label name="nama" style="margin-right: 10px">Nama Lengkap</label>
                <input type="text" name="nama" value={{ old('nama') }}>
                <table class="table table-bordered table-striped" id="table-datatable">
                  <thead>
                    <tr>
                      <th width="3%">No</th>
                      <th>Code</th>
                      <th>Symptoms</th>
                      <th>Choose your condition</th>
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
                              <option value="0" selected>No Symptom</option>
                              <option value="1.0" @if(old($symptom->KodeGejala) == 1.0) selected @endif>Definitely</option>
                              <option value="0.8" @if(old($symptom->KodeGejala) == 0.8) selected @endif>Almost Certainly</option>
                              <option value="0.6" @if(old($symptom->KodeGejala) == 0.6) selected @endif>Probably</option>
                              <option value="0.4" @if(old($symptom->KodeGejala) == 0.4) selected @endif>Maybe</option>
                              <option value="0">Unknown</option>
                              <option value="-0.4" @if(old($symptom->KodeGejala) == -0.4) selected @endif>Maybe Not</option>
                              <option value="-0.6" @if(old($symptom->KodeGejala) == -0.6) selected @endif>Probably Not</option>
                              <option value="-0.8" @if(old($symptom->KodeGejala) == -0.8) selected @endif>Almost Certainly Not</option>
                              <option value="-1.0" @if(old($symptom->KodeGejala) == -1.0) selected @endif>Definitely Not</option>
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