@extends('admin.layout.main')
    @section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">Roles List</h3>
                    </div>
                    <a type="button" class="btn " href="/admin/roles/create" >Add Role</a>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Manage</th>
                            </tr>
                            @foreach('$roles as $role')
                            <tr>
                                <td>{{$role->id}}.</td>
                                <td>{{$role->name}}</td>
                                <td>{{$role->permissiom}}</td>
                                <td>
                                    <a type="button" class="btn" href="/admin/roles/{{$role->id}}/permission" >Permission Administration</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$roles->links()}}
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    @endsection

