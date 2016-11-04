<?php
//print_r(auth::user());
$notices=\Venue\notification::getNotification();
/*$vdata=\Venue\venuedata1::getVenueData();*/
$route=Route::getCurrentRoute();
?>
<ul class="nav navbar-nav">
@if(Auth::check())
    @if(Auth::user()->user_type_id==1)


        <li class="<?php if($route->getUri()=='admin/dashboard'){echo 'active';} ?>" ><a href="/admin/dashboard" class="glyphicon glyphicon-dashboard"> Dashboard</a></li>
        <li class="<?php if($route->getUri()=='admin/notice'){echo 'active';} ?>"><a href="/admin/notice" class="glyphicon glyphicon-bell"> <span class="badge">{{count($notices)}}</span> Notification</a></li>
        <li class="<?php if($route->getUri()=='admin/client'){echo 'active';} ?>"><a href="/admin/client" class="glyphicon glyphicon-user"> Client</a></li>
            <li class="<?php if($route->getUri()=='admin/venue'){echo 'active';} ?>"><a href="/admin/venue" class="glyphicon glyphicon-leaf"> Venue</a></li></ul>

                @elseif(Auth::user()->user_type_id==2) {{--login garda user type id 2 vayo vane yo menu dekhaune--}}
            <li class="<?php if($route->getUri()=='manager/dashboard'){echo 'active';} ?>"><a href="/manager/dashboard" class="glyphicon glyphicon-dashboard"> Dashboard </a></li>
            <li class="<?php if($route->getUri()=='manager/notification'){echo 'active';} ?>"><a href="notification" class="glyphicon glyphicon-globe" > Notification <span class="badge">4</span></a></li>
            <li class="<?php if($route->getUri()=='manager/inventory'){echo 'active';} ?>"><a href="inventory" class="glyphicon glyphicon-list-alt"> Inventory</a></li>
            <li class="<?php if($route->getUri()=='manager/feedback'){echo 'active';} ?>"><a href="feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>
        <li class="<?php if($route->getUri()=='manager/gallery'){echo 'active';} ?>"><a href="gallery" class="glyphicon glyphicon-picture"> Gallery</a></li>

    @elseif(Auth::user()->user_type_id==3)
                    <li class="<?php if($route->getUri()=='user/home'){echo 'active';} ?>" ><a href="/user/home" class="glyphicon glyphicon-bell"> Home </a></li>
        <li class="<?php if($route->getUri()=='user/notification'){echo 'active';} ?>"><a href="/user/notification" class="glyphicon glyphicon-globe"> Notification<span class="badge">0</span></a></li>
        <li class="<?php if($route->getUri()=='user/feedback'){echo 'active';} ?>"><a href="/user/feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>



    @endif
    @else
        <li class="<?php if($route->getUri()=='/'){echo 'active';} ?>"><a href="/" class="glyphicon glyphicon-home"> Home</a></li>
        <li class="<?php if($route->getUri()=='Contact'){echo 'active';} ?>"><a href="/Contact" class="glyphicon glyphicon-phone-alt"> Contact Us</a></li>
        <li class="<?php if($route->getUri()=='Feedback'){echo 'active';} ?>"><a href="/Feedback" class="glyphicon glyphicon-tags"> Feedback</a></li>
        <li class="dropdown <?php if($route->getUri()=='Register'){echo 'active';} ?> <?php if($route->getUri()=='Venue'){echo 'active';} ?>"><a href="/Register" class="dropdown-toggle glyphicon glyphicon-pencil" data-toggle="dropdown"> Register
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/Register">Client</a></li>
                <li><a href="/Venue">Venue</a></li>
            </ul>
        </li>
        {{--
                        <li><a href="/Register" class="glyphicon glyphicon-pencil"> Register</a></li>
        --}}
        <li class="<?php if($route->getUri()=='login'){echo 'active';} ?>"><a href="/login" class="glyphicon glyphicon-user"> Login</a></li>
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
                <li><a href="settings"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                {{--@endforeach--}}
            @elseif(Auth::user()->user_type_id==1)
                <li><a href="/admin/account"><i class="fa fa-user fa-fw"></i> My Account</a>
                </li>
                <li><a href="/admin/settings"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
            @else
            <li><a href="account"><i class="fa fa-user fa-fw"></i> My Account</a>
            </li>
                <li><a href="settings"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
            @endif
            {{--<li><a href="settings"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>--}}
            <li class="divider"></li>
            <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>

        <!-- /.dropdown-user -->
    </li>


</ul>
{{--@include('Layout.MasterSlider')--}}
    @endif
