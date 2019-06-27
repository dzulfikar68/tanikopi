@extends('admin.template')

@section('main')
<!-- 
**********************************************************************************************************************************************************
  MAIN CONTENT
*********************************************************************************************************************************************************** 
-->
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Profil</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Profil</h4>
              <!-- FORM -->
              <form class="form-horizontal style-form" method="post">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                  <textarea class="form-control" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Telepon</label>
                  <div class="col-sm-10">
                    <input type="tel" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <select class="form-control">
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
      <!-- /wrapper -->
    </section>
<!--main content end-->
@endsection