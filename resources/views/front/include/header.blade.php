<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{route('profile')}}"><img src="{{asset('/')}}admin/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

            {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                    {{--<i class="icon-git-compare"></i>--}}
                    {{--<span class="visible-xs-inline-block position-right">Git updates</span>--}}
                    {{--<span class="badge bg-warning-400">9</span>--}}
                {{--</a>--}}

                {{--<div class="dropdown-menu dropdown-content">--}}
                    {{--<div class="dropdown-content-heading">--}}
                        {{--Git updates--}}

                    {{--</div>--}}

                    {{--<ul class="media-list dropdown-content-body width-350">--}}
                        {{--<li class="media">--}}
                            {{--<div class="media-left">--}}
                                {{--<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>--}}
                            {{--</div>--}}

                            {{--<div class="media-body">--}}
                                {{--Drop the IE <a href="#">specific hacks</a> for temporal inputs--}}
                                {{--<div class="media-annotation">4 minutes ago</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}


                    {{--</ul>--}}

                    {{--<div class="dropdown-content-footer">--}}
                        {{--<a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
        </ul>

        <p class="navbar-text">
            <span class="label bg-success">Online</span>
        </p>


        <div class="navbar-right">

            <ul class="nav navbar-nav">




                {{--<li class="dropdown">--}}

                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="icon-bubbles4"></i>--}}
                        {{--<span class="visible-xs-inline-block position-right">Messages</span>--}}
                        {{--<span class="badge bg-warning-400">2</span>--}}
                    {{--</a>--}}


                    {{--<div class="dropdown-menu dropdown-content width-350">--}}
                        {{--<div class="dropdown-content-heading">--}}
                            {{--Messages--}}
                            {{--<ul class="icons-list">--}}
                                {{--<li><a href="#"><i class="icon-compose"></i></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                        {{--<ul class="media-list dropdown-content-body">--}}




                            {{--<li class="media">--}}
                                {{--<div class="media-left"><img src="{{asset('/')}}admin/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>--}}
                                {{--<div class="media-body">--}}
                                    {{--<a href="#" class="media-heading">--}}
                                        {{--<span class="text-semibold"></span>--}}
                                        {{--<span class="media-annotation pull-right">22:48</span>--}}
                                    {{--</a>--}}

                                    {{--<span class="text-muted">But that would be extremely strained and suspicious...</span>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}



                        {{--<div class="dropdown-content-footer">--}}
                            {{--<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}

                <li class="dropdown dropdown-user">


                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span>Credit: {{Session::get('credit')}} .      </span>

                        <span>{{Session::get('clintName')}}</span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                        <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                        <li><a href="#"><span class="badge bg-blue pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                        <li><a href="#"
                               onclick="event.preventDefault()
                           document.getElementById('logoutForm').submit();"
                            ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            <form id="logoutForm" action="logout-clint" method="post">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>