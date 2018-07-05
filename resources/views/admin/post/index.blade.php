@extends('admin.layout.main')
    <!-- Main content -->
    @section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Articles List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">#</th>
                                <th>Articles List</th>
                                <th>Manage</th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>
                                    <button type="button" class="btn btn-block btn-default post-audit" post-id="{{$post->id}}" post-action-status="1" >Pass</button>
                                    <button type="button" class="btn btn-block btn-default post-audit" post-id="{{$post->id}}" post-action-status="-1" >Refuse</button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            {{$posts->links()}}
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @endsection
    <!-- /.content -->
