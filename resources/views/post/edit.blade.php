@extends("layout.main")

@section("content")
    <div class="col-sm-8 blog-main">
        <form action="/posts/{{$post->id}}" method="POST">
            {{method_field("put")}}
            {{csrf_field()}}
            <div class="form-group">
                <label>Title</label>
                <input name="title" type="text" class="form-control" placeholder="This is a title" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea id="content" name="content" class="form-control" style="height:400px;max-height:500px;"  placeholder="This is content">
                    {{$post->content}}
                </textarea>
            </div>
            @include('layout.error')
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <br>
    </div><!-- /.blog-main -->
@endsection




