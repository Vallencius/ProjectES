@extends('layout.header')

@section('content')
<style>
  .export-btn{
    margin-top: 20px;
    margin-bottom: 20px;
  }
</style>

  <section class="content">

    <div class="row">

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <h3>32</h3>
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
            <h3>4</h3>
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
            <h3>57</h3>
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

  </section>

   <div class="row">
      <section class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <img src="img/dashboardimg.jpg" alt="">
            </div>

            <div class="col-lg-6">

              <h1>SELAMAT DATANG DI KELOMPOK UAS KAMI</h1>
            </div>
          
          </div>
       

      </section>
    </div>

</div>

</body>
@stop