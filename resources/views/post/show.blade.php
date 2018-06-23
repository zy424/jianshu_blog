@extends("layout.main")

@section("content")

    <div class="col-sm-8 blog-main">
        <div class="blog-post">
            <div style="display:inline-flex">
                <h2 class="blog-post-title">{{$post->title}}</h2>
                @can('update', $post)
                <a style="margin: auto"  href="/posts/{{$post->id}}/edit">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
                @endcan

                @can('delete', $post)
                <a style="margin: auto"  href="/posts/{{$post->id}}/delete">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </a>
                @endcan
            </div>

            <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} <a href="#">{{$post->user->name}}</a></p>
            {!! $post->content!!}
            <div>
                <a href="/posts/{{$post->id}}/zan" type="button" class="btn btn-primary btn-lg">Thumbs Up</a>

            </div>
        </div>

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading"></div>

            <!-- List group -->
            <ul class="list-group">
                <li class="list-group-item">
                    <h5>2017-05-28 10:15:08 by Kassandra Ankunding2</h5>
                    <div>
                        这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论
                    </div>
                </li>
            </ul>
        </div>

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Leave Comment</div>

            <!-- List group -->
            <ul class="list-group">
                <form action="/posts/{{$post->id}}/comment" method="POST">
                    {{csrf_field()}}
                    <li class="list-group-item">
                        <textarea name="content" class="form-control" rows="10"></textarea>
                        @include('layout.error')
                        <button class="btn btn-default" type="submit">Submit</button>
                    </li>
                </form>

            </ul>
        </div>

    </div><!-- /.blog-main -->
@endsection



