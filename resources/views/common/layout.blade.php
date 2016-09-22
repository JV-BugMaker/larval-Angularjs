<html>
<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/dist/styles/main.min.css" />
    <link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=4,index_v2-less.css?v=1.0,poplogin-less.css?v=2016091212222" />
    <script type="text/javascript" src="/dist/scripts/jquery.min.js"></script>
</head>
<body id="index">
<div id="header" style="background: white">
  <div class="page-container" id="nav">
    <div class="logo" id="logo">
      <a href="/" target="_self" class="hide-text">慕课网</a>
    </div>
    <ul class="nav-item">
        @foreach($pageconfig as $key=>$config)
            <li><a href="{{$config->link}}">{{$config->page}}</a></li>
        @endforeach
    </ul>
      <div id="login-area">
          <ul class="clearfix logined">
              <li class="header-app">
                  <a href="/mobile/app">
                      <span class="icon-appdownload"></span>
                  </a>
                  <div class="QR-download">
                      <p id="app-text">慕课网APP下载</p>
                      <p id="app-type">iPhone / Android / iPad</p>
                      <img src="/static/img/index/QR-code.jpg">
                  </div>
              </li>
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
                  <div class="g-user-card"><div class="card-inner">                        <div class="card-top">                            <a href="/u/1041298"><img src="http://img.mukewang.com/5458476500014e6402200220-100-100.jpg" alt="JV_PHP" class="l"></a>                            <a href="/u/1041298"><span class="name text-ellipsis">JV_PHP</span></a>                            <p class="meta">                <a href="/u/1041298/experience">经验<b id="js-user-mp">1085</b></a>                <a href="/u/1041298/credit">积分<b id="js-user-credit">6</b></a></p>                            <a href="/mall/index" class="setup linkToMall">积分商城</a>                        </div><div class="card-history">                            <span class="history-item">                                <span class="tit text-ellipsis">MVC架构模式分析与设计</span>                                <span class="media-name text-ellipsis">3-1 开发环境的描述</span>                                <i class="icon-clock"></i><a href="/video/915" class="continue">继续</a></span></div><div class="card-sets clearfix">                            <a href="/user/setprofile" target="_blank" class="l mr30">个人设置</a>                            <a href="/passport/user/logout?referer=http://www.imooc.com" class="r">退出</a>                        </div>            </div>            <i class="card-arr"></i></div>
              </li>
          </ul>
      </div>
        <div class="search-warp clearfix" style="min-width: 32px; height: 60px;">

            <div class="search-area" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." type="text" autocomplete="off">
                <input type="hidden" class="btn_search" data-search-btn="search-btn">
            </div>
            <div class="showhide-search" data-show="no"><i class="icon-search"></i></div>
        </div>
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
