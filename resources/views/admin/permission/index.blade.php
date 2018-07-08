@extends('admin.layout.main')
    @section("content")
        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-10 col-xs-6">
                    <div class="box">

                        <div class="box-header with-border">
                            <h3 class="box-title">Permissions List</h3>
                        </div>
                        <a type="button" class="btn " href="/admin/permissions/create" >Add Permission</a>
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
                                    <td>system</td>
                                    <td>System Administration</td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>post</td>
                                    <td>Articles Administration</td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>topic</td>
                                    <td>Topics Administration</td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>notice</td>
                                    <td>Notices Administration</td>
                                    <td>
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
