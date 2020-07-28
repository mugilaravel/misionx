<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mision X Project</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('layout.csspolos')
  </head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  
  @show
  <!-- Navbar -->
 @include('layout.navbarpolos')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layout.asidepolos')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1592.4px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">        
      </div>
    </section>

    <!--   Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h1 class="card-title">@yield('content_lable')</h1>
          <!--div class="card-body table-responsive p-0"-->
          
            @yield('content_main')
          <!--/div -->
          <!-- /.card-body -->
          <div class="card-footer">
            @yield('content_footer')
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- /.content-wrapper -->
 @include('layout.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip 
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
-->
<!-- Bootstrap 4 -->
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<!-- Summernote -->
<script src="{{asset('lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.js')}}"></script>

@yield('footer')
</body>
</html>
