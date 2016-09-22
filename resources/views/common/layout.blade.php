<html>
<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/dist/styles/main.min.css" />
    <script type="text/javascript" src="/dist/scripts/jquery.min.js"></script>
</head>
<body id="index">
<div id="header">
  <div class="page-container" id="nav">
    <div class="logo" id="logo">
      <a href="/" target="_self" class="hide-text">慕课网</a>
    </div>
    <ul class="nav-item">
        @foreach($pageconfig as $key=>$config)
            <li><a href="{{$config->link}}">{{$config->page}}</a></li>
        @endforeach
    </ul>
    <div class="log-area">
        <ul class="login">
            <li>
                <a href="remind_wrap"></a>
                
            </li>
            <li>
                <a href="my_message"></a>
            </li>
            <li>
                <a href="user_center"></a>
            </li>
        </ul>
    </div>
  </div>
</div>
<div class="container">
  @yield('content')
</div>
<div class="footer">

</div>
</body>
</html>
