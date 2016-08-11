<?php $__env->startSection('sidebar'); ?>

<div id="header">
    <div class="page-container" id="nav">
        <img src="images/login.png" style="float: left"><a href="index" target="_self" class="hide-text"></a>
        <div class="g-menu-mini l">
            <a href="#" class="menu-ctrl">
                <i class="icon-menu"></i>
            </a>
            <ul class="nav-item l">
                <li>
                    <a href="course"  target="_self">试题</a>
                </li>
                <li><a href="program"  target="_self">计划</a></li>
                <li><a href="wenda"  target="_self">猿问</a></li>
                <li><a href="article"  target="_self">文章</a></li>
        <!--         <li><a href="/wiki"  target="_self">WIKI</a></li> -->
                            </ul>
        </div>
                <div id="login-area">
            <ul class="header-unlogin clearfix">
                <li class="header-app">
                    <a href="/mobile/app" >
                        <span class="icon-appdownload"></span>
                    </a>
                    <div class="QR-download">
                        <p id="app-text">慕课网APP下载</p>
                        <p id="app-type">iPhone / Android / iPad</p>
                        <img src="picture/qr-code.jpg">
                    </div>
                </li>
                <li class="header-signin">
                    <a href="#" id="js-signin-btn">登录</a>
                </li>
                <li class="header-signup">
                    <a href="#" id="js-signup-btn">注册</a>
                </li>
            </ul>
        </div>
                <!--
        <div class="app-down-area r">
            <a href="/mobile/app">
                <i class="header-app-icon"></i>慕课APP
            </a>
        </div>
        -->


        <div class='search-warp clearfix' style='min-width: 32px; height: 60px;'>
            <div class="search-area min" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." type="text" autocomplete="off">
                <input type='hidden' class='btn_search' data-search-btn="search-btn" />
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class='showhide-search' data-show='no'><i class='icon-search'></i></div>
        </div>
    </div>
</div>



<?php echo $__env->yieldSection(); ?>








<div class="footer bg-white idx-minwidth">
  <div class="container">

      <div style="text-align:center;margin-top:-10px;padding-bottom:10px;">
      <!--可信网站图片LOGO安装开始-->
      <script src="js/seallogo.dll"></script>
      <!--可信网站图片LOGO安装结束-->
    </div>
  </div>
</div>


<div id="footer" >
    <div class="waper">
        <div class="footerwaper clearfix">
            <div class="followus r">
                <a class="followus-weixin" href="javascript:;"  target="_blank" title="微信">
                    <div class="flw-weixin-box"></div>
                </a>
                <a class="followus-weibo" href="http://weibo.com/u/3306361973"  target="_blank" title="新浪微博"></a>
                <a class="followus-qzone" href="http://user.qzone.qq.com/1059809142/" target="_blank" title="QQ空间"></a>
            </div>
            <div class="footer_intro l">
                <div class="footer_link">
                    <ul>
                        <li><a href="http://www.imooc.com/" target="_blank">网站首页</a></li>
                        <li><a href="/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="/about/contact" target="_blank">联系我们</a></li>
                        <li><a href="http://yun.imooc.com/" target="_blank">慕课云</a></li>
                        <li><a href="/corp/index" target="_blank">合作专区</a></li>
                        <li><a href="/about/us" target="_blank">关于我们</a></li>
                        <li> <a href="/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="/user/feedback" target="_blank">意见反馈</a></li>
                        <li> <a href="/about/friendly" target="_blank">友情链接</a></li>
                    </ul>
                </div>
                <p>Copyright © 2016 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>


