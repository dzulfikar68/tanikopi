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
          <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Produk</h4>
          <!-- FORM -->
          <form class="form-horizontal style-form" method="post" action="{{ url('admin/produk/'.$product->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }} 
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Nama Produk</label>
              <div class="col-sm-10">
                <input name="name_product" type="text" class="form-control" value="{{ $product->name_product }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Kode Produk</label>
              <div class="col-sm-10">
                <input name="code_product" type="text" class="form-control" value="{{ $product->code_product }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Gambar Produk</label>
              <div class="col-sm-10">
                <input name="image" type="file" name="image">
                <img src="{{ asset('uploads/'.$product->image) }}" style="max-width: 50%"/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Harga Produk</label>
              <div class="col-sm-10">
                <input name="price" type="number" class="form-control" value="{{ $product->price }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Barang yang tersedia</label>
              <div class="col-sm-10">
                <input name="qty_available" type="number" class="form-control" value="{{ $product->qty_available }}">
              </div>
            </div>
            <input align="right" class="btn btn-theme" type="submit" value="Edit Produk">
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