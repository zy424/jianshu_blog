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
                            <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>User name</th>
                                <th>Action</th>
                            </tr>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>
                                    <a type="button" class="btn" href="/admin/users/{{$user->id}}/role" >Role Management </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$users->links()}}
                    </div>

                </div>
            </div>
        </div>
    </section>
    @endsection
    <!-- /.content -->
