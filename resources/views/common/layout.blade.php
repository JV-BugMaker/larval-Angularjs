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
            <li class="remind_warp">
                <i class="msg_remind" style="display: none;"></i>
                <a target="_blank" href="/u/1041298/notices"><i class="icon-notifi"></i></a>
            </li>
            <li class="my_message">
                <a href="/u/1041298/messages" title="我的消息" target="_blank">
                    <span class="msg_icon" style="display: none;"></span>
                    <i class="icon-mail"></i>
                    <span style="display: none;">我的消息</span>
                </a>
            </li>
            <li class="set_btn user-card-box">
                <a id="header-avator" class="user-card-item js-header-avator" action-type="my_menu" href="/u/1041298" target="_self">
                    <img width="40" height="40" src="http://img.mukewang.com/5458476500014e6402200220-100-100.jpg">
                    <i class="myspace_remind" style="display: none;"></i>
                    <span style="display: none;">动态提醒</span>
                </a>
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
