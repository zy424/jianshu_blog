@extends("layout.main")

@section("content")

    <div class="col-sm-8 blog-main">
        <blockquote>
            <p>{{$topic->name}}</p>
            <footer>Articles：{{$topic->post_topics_count}}</footer>
            <br>
            <button class="btn btn-default topic-submit"  data-toggle="modal" data-target="#topic_submit_modal" topic-id="{{$topic->id}}"  type="button">Publish</button>
        </blockquote>

    <div class="modal fade" id="topic_submit_modal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">My Articles</h4>
                </div>
                <div class="modal-body">
                    <form action="/topic/{{$topic->id}}/submit" action="POST">
                        {{csrf_field()}}
                        @foreach($myposts as $post)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="post_ids[]" value="{{$post->id}}">
                                {{$post->title}}
                            </label>
                        </div>
                        @endforeach
                        <button type="submit" class="btn btn-default">Publish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Articles</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    @foreach($posts as $post)
                    <div class="blog-post" style="margin-top: 30px">
                        <p class=""><a href="/user/{{$post->user->id}}">{{$post->user->name}}</a> {{$post->created_at->diffForHumans()}}</p>
                        <p class=""><a href="/posts/{{$post->id}}" >{{$post->title}}</a></p>

                        <p> {!!str_limit($post->content, 100, '...')  !!}</p>
                    </div>
                    @endforeach
                </div>

            </div>
            <!-- /.tab-content -->
        </div>


    </div><!-- /.blog-main -->
    </div>

@endsection



