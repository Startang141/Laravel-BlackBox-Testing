@extends('admin.layouts.main')

@section('content')
<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
  <div class="row align-items-center">
    <div class="col-md-6 col-8 align-self-center">
      <h3 class="page-title mb-0 p-0">Profile</h3>
      <div class="d-flex align-items-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-md-6 col-4 align-self-center">
      <div class="text-end upgrade-btn">
        <a href="https://www.wrappixel.com/templates/monsteradmin/"
          class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Upgrade to
        Pro</a>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <!-- Row -->
  <div class="row">
    <!-- Column -->
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <form class="form-horizontal form-material mx-2">
            <div class="form-group">
              <label class="col-md-12 mb-0">Full Name</label>
              <div class="col-md-12">
                <input type="text" placeholder="Johnathan Doe"
                  class="form-control ps-0 form-control-line">
              </div>
            </div>
            <div class="form-group">
              <label for="example-email" class="col-md-12">Email</label>
              <div class="col-md-12">
                <input type="email" placeholder="johnathan@admin.com"
                  class="form-control ps-0 form-control-line" name="example-email"
                  id="example-email">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 mb-0">Password</label>
              <div class="col-md-12">
                <input type="password" value="password"
                  class="form-control ps-0 form-control-line">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 mb-0">Phone No</label>
              <div class="col-md-12">
                <input type="text" placeholder="123 456 7890"
                  class="form-control ps-0 form-control-line">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 mb-0">Message</label>
              <div class="col-md-12">
                <textarea rows="5" class="form-control ps-0 form-control-line"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-12">Select Country</label>
              <div class="col-sm-12 border-bottom">
                <select class="form-select shadow-none border-0 ps-0 form-control-line">
                  <option>London</option>
                  <option>India</option>
                  <option>Usa</option>
                  <option>Canada</option>
                  <option>Thailand</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12 d-flex">
                <button class="btn btn-success mx-auto mx-md-0 text-white">Update
                Profile</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Column -->
  </div>
  <!-- Row -->
  <!-- ============================================================== -->
  <!-- End PAge Content -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Right sidebar -->
  <!-- ============================================================== -->
  <!-- .right-sidebar -->
  <!-- ============================================================== -->
  <!-- End Right sidebar -->
  <!-- ============================================================== -->
</div>
@endsection