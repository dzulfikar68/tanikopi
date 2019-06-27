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
        <h3><i class="fa fa-angle-right"></i> Manajemen Koperasi</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> List Koperasi</h4>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Instansi</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>NO Telp</th>
                    <th>Pengurus</th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($koperasi) == 0)
                    <tr>
                      <td colspan="6" align="center">
                        <i>Tidak ada data koperasi</i>
                      </td>
                    </tr>
                  @else
                    @foreach($koperasi as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->address }}</td>
                        <td>{{ $value->phone }}</td>
                        <td>{{ $value->gender }}</td>
                    </tr>
                    @endforeach
                  @endif
                </tbody>
              </table>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
      <!-- /wrapper -->
    </section>
<!--main content end-->
@endsection