
<?php $user = \Auth::user() ?>
<div class="blog-masthead">
    <div class="container">
        <ul class="nav navbar-nav navbar-left">
            <li>
                <a class="blog-nav-item " href="/posts">Homepage</a>
            </li>
            <li>
                <a class="blog-nav-item" href="/posts/create">Create article</a>
            </li>
            @if($user)
            <li>
                <a class="blog-nav-item" href="/notices">Notice</a>
            </li>
            @endif
            <li>
                <input name="query" type="text" value="" class="form-control" style="margin-top:10px" placeholder="search">
            </li>
            <li>
                <button class="btn btn-default" style="margin-top:10px" type="submit">Go!</button>
            </li>
        </ul>

        @if($user)
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <div>
                        <img src="/storage/9f0b0809fd136c389c20f949baae3957/iBkvipBCiX6cHitZSdTaXydpen5PBiul7yYCc88O.jpeg" alt="" class="img-rounded" style="border-radius:500px; height: 30px">
                        <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{$user->name}}  <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/user/{{\Auth::id()}}">My homepage</a></li>
                            <li><a href="/user/me/setting">Personal setting</a></li>
                            <li><a href="/logout">Log out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        @else
            <ul class="nav navbar-nav navbar-right">
                <li><a class="blog-nav-item" href="/login"><span class="glyphicon glyphicon-log-in"></span> login</a></li>
                <li>
                    <a class="blog-nav-item" href="/register"><span class="glyphicon glyphicon-registration-mark"></span> register</a>
                </li>
            </ul>

        @endif
    </div>
</div>