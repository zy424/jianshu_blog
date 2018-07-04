@extends('admin.layout.main')

    <!-- Main content -->
    @section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">User List</h3>
                    </div>
                    <a type="button" class="btn " href="/admin/users/create" >Add new user</a>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">#</th>
                                <th>User name</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>test1</td>
                                <td>
                                    <a type="button" class="btn" href="/admin/users/2/role" >Management </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>test2</td>
                                <td>
                                    <a type="button" class="btn" href="/admin/users/3/role" >Management</a>
                                </td>
                            </tr>
                            </tbody></table>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @endsection
    <!-- /.content -->
