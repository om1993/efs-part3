<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <h3>@if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
            </li></h3>
        @endif
        <div class="title" style="background-color: aquamarine" >Eagle Financial Services </div>
        <div class="row">
            <div class="panel-heading" style="font-family:'Harlow Solid Italic'; background-color: aquamarine; font-size: 200%;">
                    <div color="#fff8dc"><b>Our motto</b><div>
                        </div>

                        <div class="panel-body" style="font-family:'italian'; background-color:silver; font-size: 150%; ">
                            <font color="black"><div><h4><i>" Now Investments made easy"</i></h4>
                                    <br>
                                    Eagle Financial - One stop shop for your financial needs
                                </div>
                            </font>
                        </div>
                    </div>
                </div>
            <div class="link"><h3><a href="{{url('/customers')}}">Home</a></h3></div>
            </div>
        </div>

</div>
</div>
</body>
</html>
