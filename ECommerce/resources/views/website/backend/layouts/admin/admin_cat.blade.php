
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
         <!-- Content Wrapper. Contains page content -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Ajouter une catégorie</h1>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                           <form action="/ajout_cat" method="POST" class="col-sm-6">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <div class="form-group">
                                 <label>Nom du Catégorie</label>
                                 <input type="text" class="form-control" name="cat" placeholder="Nom du Catégorie" required>
                              </div>
                              <div class="reset-button">
                                 <input type="submit" class="btn btn-success" value="Ajouter">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
            </br></br></br></br></br></br></br></br></br></br>
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
