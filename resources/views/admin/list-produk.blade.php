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
              <h4 class="mb"><i class="fa fa-angle-right"></i> List Produk</h4>
              @if((Session::get('role') == 'admin') || (Session::get('role') == 'pengelola'))
              <a href="{{ url('admin/produk/create') }}" class="btn btn-theme">Tambah Produk</a><br><br>
              @endif
              @if(Session::has('message'))
              <div class="alert {{ Session::get('alert') }} alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ Session::get('message') }}
              </div>
              @endif
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Kode Produk</th>
                    <th>Harga Produk</th>
                    <th>Tersedia</th>
                    <th>Status</th>
                    <th width="250"></th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($products) == 0)
                    <tr>
                      <td colspan="7" align="center">
                        <i>Tidak ada produk</i>
                      </td>
                    </tr>
                  @else
                    @foreach($products as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->name_product }}</td>
                        <td>{{ $value->code_product }}</td>
                        <td>{{ $value->price }}</td>
                        <td>{{ $value->qty_available }}</td>
                        <td>{{ ($value->status == 1) ? 'aktif' : 'pending' }}</td>
                        <td>
                          <button data-toggle="modal" data-target="#verify{{$value->id}}" class="btn btn-info">verify</button>
                          <a href="{{ url('admin/produk/'.$value->id.'/edit') }}" class="btn btn-warning">edit</a>
                          <button data-toggle="modal" data-target="#delete{{$value->id}}" class="btn btn-danger">delete</button>
                        </td>
                    </tr>

                    <!-- Modal Verify -->
                    <div id="verify{{$value->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <form method="post" action="{{ url('admin/produk/verify/'.$value->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Verify ({{ $value->name_product }})</h4>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <label>Link GoogleSheet</label>
                                <input type="text" class="form-control" name="link_gsheet" value="{{ $value->link_gsheet }}">
                              </div>
                              <div class="form-group">
                                <label>Activate</label>
                                <select class="form-control" name="status">
                                  <option value="1" {{ $value->status == 1 ? 'selected' : '' }}>Active</option>
                                  <option value="0" {{ $value->status == 0 ? 'selected' : '' }}>Non-Active</option>
                                </select>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <input type="submit" class="btn btn-theme" value="update"/>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <!-- Modal Delete -->
                    <div id="delete{{$value->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <form method="post" action="{{ url('admin/produk/'.$value->id) }}">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Delete ({{ $value->name_product }})</h4>
                            </div>
                            <div class="modal-body">
                              <p>apakah akan anda hapus? ({{ $value->name_product }})</p>
                            </div>
                            <div class="modal-footer">
                              <input type="submit" class="btn btn-danger" value="yes"/>
                              <button type="button" class="btn btn-default" data-dismiss="modal">no</button>
                            </div>
                          </div>
                        </form>

                      </div>
                    </div>
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
