<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
<table border="1">
    <tr>
        <td>home</td>
        <td>contact us</td>
    </tr>
</table>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>