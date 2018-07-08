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
                            <tr>
                                <td>1.</td>
                                <td>sys-manager</td>
                                <td>System Administrator</td>
                                <td>
                                    <a type="button" class="btn" href="/admin/roles/1/permission" >Permission Administration</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>post-manager</td>
                                <td>Articles Administrator</td>
                                <td>
                                    <a type="button" class="btn" href="/admin/roles/2/permission" >Permission Administration</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>topic-manager</td>
                                <td>Topics Administrator</td>
                                <td>
                                    <a type="button" class="btn" href="/admin/roles/3/permission" >Permission Administration</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>notice-manager</td>
                                <td>Notices Administrator</td>
                                <td>
                                    <a type="button" class="btn" href="/admin/roles/4/permission" >Permission Administration</a>
                                </td>
                            </tr>
                            </tbody></table>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    @endsection

