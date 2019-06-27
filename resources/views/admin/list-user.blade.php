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
        <h3><i class="fa fa-angle-right"></i> Manajemen User</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> List User</h4>
                <div style="float:right; margin-bottom: 20px;">
                    <a href="#" class="btn btn btn-theme btn-md" id="button-add" data-toggle="modal"
                       data-target="#addUserModal">Add User</a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th width="200"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $key => $user)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->role }}</td>
                        @if($user->status==0)
                        <td><span class="label label-warning">Inactive</span></td>
                        @elseif($user->status==1)
                        <td><span class="label label-success">Active</span></td>
                        @endif
                        <td>
                            <button data-toggle="modal" data-target="#verify{{$user->id}}" class="btn btn-info btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-theme btn-xs edit-user" data-id="{{ $user->id }}" ><i class="fa fa-pencil"></i></button>
                            <a href="{{ url('admin/user/delete/'.$user->id) }}" class="btn btn-danger btn-xs delete-user"><i class="fa fa-trash-o "></i></a>
                        </td>
                    </tr>

                    <!-- Modal Verify -->
                    <div id="verify{{$user->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <form method="post" action="{{ url('admin/user/verify/'.$user->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Verify ({{ $user->name }})</h4>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <label>Activate</label>
                                <select class="form-control" name="status">
                                  <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active</option>
                                  <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>Non-Active</option>
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

                    @endforeach
                    </tbody>
                </table>

            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      </section>
      <!-- /wrapper -->
    </section>

@include('admin/add-user-modal')
@include('admin/edit-user-modal')

<!--main content end-->
@endsection

@section('js')

<script type="text/javascript">
    $(document).ready(function () {
        //onclick edit icon
        $('.edit-user').click(function () {
            var id = $(this).data('id');
            var name = $(this).closest('tr').find('td:eq(1)').text();
            var gender = $(this).closest('tr').find('td:eq(2)').text();
            var email = $(this).closest('tr').find('td:eq(3)').text();
            var phone = $(this).closest('tr').find('td:eq(4)').text();
            var address = $(this).closest('tr').find('td:eq(5)').text();
            var role = $(this).closest('tr').find('td:eq(6)').text();

            $('#editUserModal').modal('show');

            $('#editUserModal input[name="id"]').val(id);
            $('#editUserModal input[name="name"]').val(name);
            $('#editUserModal input[name="email"]').val(email);
            $('#editUserModal input[name="phone"]').val(phone);
            $('#editUserModal textarea[name="address"]').text(address);
            $('#editUserModal input[name=gender][value=' + gender + ']').prop('checked',true)
            $('#editUserModal input[name=role][value=' + role + ']').prop('checked',true)
        });

        //delete data
        $('.delete-user').click(function(){
            return confirm("Are you sure, you want to delete this User?");
        })

    });

</script>


@endsection
