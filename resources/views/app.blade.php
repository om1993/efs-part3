<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eagle Financial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body style="background-color:burlywood">
<div class="container" style="font-family:'Malgun Gothic Semilight' ; font-size: medium;">
    <a href="{{ action('CustomerController@index') }}">Customers</a> |
    <a href="{{ action('StockController@index') }}">Stocks</a> |
    <a href="{{ action('InvestmentController@index') }}">Investments</a> |
    <a href="{{ action('MutualfundController@index') }}">Mutualfund</a>
</div>
<hr>
<div class="container">
    @yield('content')
</div>
</body>
</html>

