<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{asset('/')}}admin/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
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
                    <li><a href="{{route('home')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>


                    <li><a href="{{route('information-seeker')}}"><i class="fa fa-commenting"></i> <span>Information Seeker</span></a></li>


                    <li>
                        <a href="#"><i class="icon-stack2"></i> <span>Client</span></a>
                        <ul>
                            <li><a href="{{route('clint-list')}}">All Client</a></li>
                            <li><a href="{{route('clint-request')}}">Client Request</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-home4"></i> <span>Credit</span></a>
                        <ul>
                            <li><a href="{{route('confirm-credit')}}"><span>Credit Request</span></a></li>
                            <li><a href="{{route('confirm-cash')}}">Cash Request</a></li>

                        </ul>
                    </li>




                    <li>
                        <a href="#"><i class="icon-stack2"></i> <span>Educational Backgrounds</span></a>
                        <ul>
                            <li><a href="{{route('add-subject')}}">Add Backgrounds</a></li>
                            <li><a href="{{route('view-subject')}}">View Backgrounds</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-stack2"></i> <span>Department</span></a>
                        <ul>
                            <li><a href="{{route('add-department')}}">Add Department</a></li>
                            <li><a href="{{route('view-department')}}">View Department</a></li>

                        </ul>
                    </li>



                </ul>

            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>