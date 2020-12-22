<!DOCTYPE html>
<html lang="en">
<head>

  @include('website.backend.layouts.admin.layout.admin_head')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('website.backend.layouts.admin.layout.admin_header')


@include('website.backend.layouts.admin.layout.admin_sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">


        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
  <!-- /.content-wrapper -->
  @include('website.backend.layouts.admin.layout.admin_footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

 @include('website.backend.layouts.admin.layout.admin_foot_script')

</body>
</html>
