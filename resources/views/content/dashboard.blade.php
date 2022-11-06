@extends('layout.header')

@section('content')
<style>
  .export-btn{
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .logo-mental{
    width: 70%;
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

  .margin-text{
    margin-top: 5%;
  }
</style>

  <section class="content">

    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{ $gejala }}</h3>
            <p>Total Gejala</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{ $penyakit }}</h3>
            <p>Total Penyakit</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{ $pengetahuan }}</h3>
            <p>Total Pengetahuan</p>
          </div>
          <div class="icon">
            <i class="ion ion-android-list"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>3</h3>
            <p>Jumlah Kategori Diskusi</p>
          </div>
          <div class="icon">
            <i class="fa fa-folder"></i>
          </div>
        </div>
      </div>
    </div>

   <div class="row">
      <section class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <img src="{{ asset('images/mental.png') }}" alt="" class="logo-mental">
            </div>

            <div class="col-lg-6 text-center margin-text">
              <h1>SELAMAT DATANG DI PROJECT KELOMPOK UAS KAMI</h1>
              <h1>-MENTAL HEALTH DIAGNOSYS-</h1>
            </div>
          
          </div>
       

      </section>
    </div>

  </section>

</div>

</body>
@stop