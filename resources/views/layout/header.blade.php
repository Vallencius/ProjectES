<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Expert System</title> 

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('css/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/assets/bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/assets/dist/css/AdminLTE.min.css') }} ">

  <link rel="stylesheet" href="{{ asset('css/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/assets/dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/assets/bower_components/morris.js/morris.css') }}">
  <link rel="stylesheet" href="{{ asset('css/assets/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/assets/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('css/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <a href="index.php" class="logo">
        <span class="logo-mini"><i class="fa fa-code"></i></span>
        <span class="logo-lg">Expert System UAS</span>
      </a>

      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              </a>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-home"></i>HOME</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
     <aside class="main-sidebar">
      <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Menu</li>
          <li> 
            <a href="{{ route('home') }}">
              <i class="fa fa-dashboard"></i> <span>Beranda</span>
            </a>
          </li>

          <li>
            <a href="{{ route('diagnosis') }}">
              <i class="fa fa-folder"></i> <span>Diagnosis</span>
            </a>
          </li>

          <li>
            <a href="member.php">
              <i class="fa fa-users"></i> <span>Riwayat</span>
            </a>
          </li>

          <li>
            <a href="diskusi.php">
              <i class="fa fa-comment"></i> <span>Keterangan</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
 
      </section>
      <!-- /.sidebar -->
    </aside>


    <div class="content-wrapper">
      @yield('content')

    </div>
