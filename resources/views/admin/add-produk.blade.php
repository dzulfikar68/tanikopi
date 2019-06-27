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
    <h3><i class="fa fa-angle-right"></i> Manajemen Produk</h3>
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i> Tambah Produk</h4>
          <!-- FORM -->
          <form class="form-horizontal style-form" method="post" action="{{ action('ProdukController@store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}  
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Nama Produk</label>
              <div class="col-sm-10">
                <input name="name_product" type="text" class="form-control" value="{{ old('name_product') }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Kode Produk</label>
              <div class="col-sm-10">
                <input name="code_product" type="text" class="form-control" value="{{ old('code_product') }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Gambar Produk</label>
              <div class="col-sm-10">
                <input name="image" type="file" name="image" value="{{ old('image') }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Harga Produk</label>
              <div class="col-sm-10">
                <input name="price" type="number" class="form-control" value="{{ old('price') }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Barang yang tersedia</label>
              <div class="col-sm-10">
                <input name="qty_available" type="number" class="form-control" value="{{ old('qty_available') }}">
              </div>
            </div>
            <input align="right" class="btn btn-theme" type="submit" value="Tambah Produk">
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