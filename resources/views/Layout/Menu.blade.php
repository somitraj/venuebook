<?php
//print_r(auth::user());
$notices=\Venue\notification::getNotification();
/*$vdata=\Venue\venuedata1::getVenueData();*/
?>
<ul class="nav navbar-nav">
@if(Auth::check())
    @if(Auth::user()->user_type_id==1)

        <li class="active" ><a href="dashboard" class="glyphicon glyphicon-dashboard"> Dashboard</a></li>
        <li><a href="notice" class="glyphicon glyphicon-bell"> <span class="badge">{{count($notices)}}</span> Notification</a></li>
        <li><a href="client" class="glyphicon glyphicon-user"> Client</a></li>
        {{--<li class="dropdown" >
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" >
                    <i class="glyphicon glyphicon-leaf"></i> Venue<i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="managerlist">Managerlist</a>
                    </li>
                    <li><a href="venuelist">VenueList</a>
                    </li>
                </ul>
            <li>--}}
                <!-- /.dropdown-user -->
            <li><a href="venue" class="glyphicon glyphicon-leaf"> Venue</a></li></ul>
                @elseif(Auth::user()->user_type_id==2) {{--login garda user type id 2 vayo vane yo menu dekhaune--}}
            <li class="active"><a href="dashboard" class="glyphicon glyphicon-dashboard"> Dashboard </a></li>
            <li><a href="notification" class="glyphicon glyphicon-globe" > Notification <span class="badge">4</span></a></li>
            <li class="dropdown"><a href="inventory" class="glyphicon glyphicon-list-alt"> Inventory</a></li>
            <li><a href="feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>
        <li><a href="gallery" class="glyphicon glyphicon-picture"> Gallery</a></li>

    @elseif(Auth::user()->user_type_id==3)<li class="active" ><a href="home" class="glyphicon glyphicon-bell"> Home </a></li>
        <li><a href="/Notification" class="glyphicon glyphicon-globe"> Notification<span class="badge">0</span></a></li>
        <li><a href="feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>



    @endif
    @else
        <li class="active"  ><a href="/" class="glyphicon glyphicon-home"> Home</a></li>
        <li><a href="/Contact" class="glyphicon glyphicon-phone-alt"> Contact Us</a></li>
        <li><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>
        <li class="dropdown"><a href="/Register" class="dropdown-toggle glyphicon glyphicon-pencil" data-toggle="dropdown"> Register
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/Register">Client</a></li>
                <li><a href="/Venue">Venue</a></li>
            </ul>
        </li>
        {{--
                        <li><a href="/Register" class="glyphicon glyphicon-pencil"> Register</a></li>
        --}}
        <li><a href="/login" class="glyphicon glyphicon-user"> Login</a></li>
    @endif
</ul>

@if(Auth::check())

<ul class="nav navbar-nav navbar-right">
    <li class="dropdown" >
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" >
            <i class="fa fa-user fa-fw"></i>User Account <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            @if(Auth::user()->user_type_id==2)
               {{-- @foreach($vdata as $vd)--}}
                    <li><a href="account?id={{Auth::user()->id}}"><i class="fa fa-user fa-fw"></i> My Account</a>
                     </li>
                {{--@endforeach--}}

            @else
            <li><a href="account"><i class="fa fa-user fa-fw"></i> My Account</a>
            </li>
            @endif
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>

        <!-- /.dropdown-user -->
    </li>


</ul>
{{--@include('Layout.MasterSlider')--}}
    @endif
