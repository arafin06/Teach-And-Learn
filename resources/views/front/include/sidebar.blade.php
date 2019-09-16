<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">

                    <div class="media-body">
                        <span class="media-heading text-semibold">{{Session::get('clintName')}}</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;Dhaka, Bangladesh
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li><a href="{{route('profile')}}"><i class="icon-home4"></i> <span>Profile</span></a></li>





                    <li><a href="{{route('ask-question')}}"><i class="icon-home4"></i> <span>Ask Question</span></a></li>


                    <li><a href="{{route('question-list')}}"><i class="icon-home4"></i> <span>Want TO Teach?</span></a></li>

                    <li>
                        <a href="#"><i class="icon-cart"></i> <span>On Going Session</span></a>
                        <ul>
                            <li><a href="{{route('session-student')}}">As a student</a></li>
                            <li><a href="{{route('session-teacher')}}">As a teacher</a></li>

                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="icon-cart"></i> <span>Credits</span></a>
                        <ul>
                            <li><a href="{{route('buy-credit')}}">Buy Credits</a></li>
                            <li><a href="{{route('sell-credit')}}">Sell Credits</a></li>

                        </ul>
                    </li>








                </ul>

            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>