<div id="sidebar" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">


    <aside id="widget-welcome" class="widget panel panel-default">
        <div class="panel-heading">
            Welcome！
        </div>
        <div class="panel-body">
            <p>
                Welcome to yiBlog
            </p>
            <p>
                <strong><a href="/">yiBlog</a></strong> build with Laravel5.4
            </p>
        </div>
    </aside>
    <aside id="widget-categories" class="widget panel panel-default">
        <div class="panel-heading">
            Special Topic
        </div>

        <ul class="category-root list-group">
            @foreach($topics as $topic)
            <li class="list-group-item">
                <a href="/topic/{{$topic->id}}">{{$topic->name}}</a>
            </li>

            @endforeach
        </ul>

    </aside>
</div>