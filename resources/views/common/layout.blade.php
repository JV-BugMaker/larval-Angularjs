<html>
<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/dist/styles/main.min.css" />
    <script type="text/javascript" src="/dist/scripts/jquery.min.js"></script>
</head>
<body id="index">
<div class="header">
 this is header!
</div>
<div class="container">
  @yield('content')
</div>
<div class="footer">

</div>
</body>
</html>
