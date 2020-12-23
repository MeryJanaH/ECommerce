
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
                  <h1>Ajouter un produit</h1>
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
                           <form class="col-sm-6">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <div class="form-group">
                                 <label>Nom du Produit</label>
                                 <input type="text" class="form-control" placeholder="Nom du Produit" required>
                              </div>
                              <div class="form-group">
                                 <label>Description du Produit</label>
                                 <input type="text" class="form-control" placeholder="Description du Produit" required>
                              </div>
                              <div class="form-group">
                                 <label>Livraison</label>
                                 <input type="text" class="form-control" placeholder="Livraison" required>
                              </div>
                              <div class="form-group">
                                 <label>Catégorie du produit</label>
                                 <input type="text" class="form-control" placeholder="Catégorie du produit" required>
                              </div>
                              <div class="form-group">
                                 <label>Prix</label>
                                 <input type="number" class="form-control" placeholder="Prix" required>
                              </div>
                              <div class="form-group">
                                 <label>Télécharger la photo du Produit</label></br>
                                 <input type="file" name="picture">
                                 <input type="hidden" name="old_picture">
                              </div>
                              <div class="reset-button">
                                 <a href="#" class="btn btn-success">Enregistrer</a>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
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
