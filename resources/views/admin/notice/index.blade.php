
   @extends('admin.layout.main')
   @section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">Notices List</h3>
                    </div>
                    <a type="button" class="btn " href="/admin/notices/create">Add Notice</a>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Operate</th>
                            </tr>
                            @foreach($notices as $notice)
                            <tr>
                                <td>{{$notice->id}}</td>
                                <td>{{$notice->title}}</td>
                                <td></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
   @endsection
