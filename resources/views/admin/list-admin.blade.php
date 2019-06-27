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
        <h3><i class="fa fa-angle-right"></i> Manajemen Admin</h3>
        <div class="row mt">
            <div class="col-lg-6">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> List Admin</h4>
                    <div style="float:right; margin-bottom: 20px;">
                        <a href="#" class="btn btn-theme btn-md" id="button-add">Add
                            Admin</a>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($admins as $key => $admin)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>
                                <button class="btn btn-theme btn-xs edit-admin" data-id="{{ $admin->id }}" data-name="{{ $admin->name }}" data-email="{{ $admin->email }}" ><i class="fa fa-pencil"></i></button>
                                <a href="{{ url('admin/admin/delete/'.$admin->id) }}" class="btn btn-danger btn-xs delete-admin"><i class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="col-lg-6" id="form-container">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> <span id="title-add-admin-form">Add Admin</span></h4>

                    <form action="#" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password" id="password" class="form-control" required>
                        </div>


                        <button class="btn btn btn-theme" type="submit" id="button-form"><span>Save</span></button>
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

@section('js')

<script type="text/javascript">

    $(document).ready(function () {

        $('#form-container').hide();

        $('#button-add').click(function(){
            $('#form-container input[name="name"]').val('');
            $('#form-container input[name="email"]').val('');
            $('#form-container input[name="id"]').val('');

            $('#form-container').show();
            $('#title-add-admin-form').text('Add Admin');
            $('#button-form').text('Save');
            $('#button-delete').hide();

            $('#form-container form').attr('action', "{{ action('Admin\AdminController@store') }}");

        });

        //edit data
        $('.edit-admin').click(function(){
            var id = $(this).data('id');
            var name = $(this).data('name');
            var email = $(this).data('email');

            $('#form-container input[name="id"]').val(id);
            $('#form-container input[name="name"]').val(name);
            $('#form-container input[name="email"]').val(email);

            $('#form-container').show();
            $('#title-add-admin-form').text('Edit Admin');
            $('#button-form').text('Update');

            $('#form-container form').attr('action', "{{ action('Admin\AdminController@update') }}");

        });

        //delete data
        $('.delete-admin').click(function(){
            return confirm("Are you sure, you want to delete this Admin?");
        })


    });//END DOCUMENT READY




</script>

@endsection
