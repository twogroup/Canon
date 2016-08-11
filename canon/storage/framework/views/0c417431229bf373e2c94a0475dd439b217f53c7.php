<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>
            Java入门第一季
    </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="77103107776157736375">
<meta property="wb:webmaster" content="c4f857219bfae3cb">
<meta http-equiv="Access-Control-Allow-Origin" content="*">
<meta http-equiv="Cache-Control" content="no-transform ">

<meta name="Keywords" content="">

<meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。">



<script src="js/push.js"></script><script src="js/rt.js" async="" type="text/javascript"></script><script type="text/javascript">

      var OP_CONFIG={"module":"course","page":"view","userInfo":{"uid":"3116765","nickname":"qq_\u672c\u5bab\u672a\u6b7b\u4f11\u60f3\u7eb3\u59be_03116765","head":"http:\/\/img.mukewang.com\/user\/56f9e5ab0001e7b101000100-80-80.jpg","usertype":"1","roleid":0}};
  var isLogin = 1;
var is_choice = "";
  var seajsTimestamp="v=201603290933";
    var ownName="3165819322@qq.com"
  
</script>


<script>
/*学习页通用配置*/
var GC = {
  course: {
    id: 85,
    name: 'Java入门第一季',
    pic: 'http://img.mukewang.com/536059be00010b6d06000338-240-135.jpg',
    video_url: 'http://v1.mukewang.com/935343da-25ee-4de7-93db-78f8bfb41c34/H.mp4'
  },
  classmates: 20 // 你的同学一页显示数量
};
</script>



<link rel="stylesheet" href="css/a.css" type="text/css">
<script src="js/jquery_002.js" async="" charset="utf-8"></script><script src="js/seajs-text.js" async="" charset="utf-8"></script><script src="js/common.js" async="" charset="utf-8"></script><script src="js/share.js"></script><script src="js/string.js" async="" charset="utf-8"></script><script src="js/suggest.js" async="" charset="utf-8"></script><script src="js/store.js" async="" charset="utf-8"></script><script src="js/json.js" async="" charset="utf-8"></script><script src="javascripts/im.js" async="" charset="utf-8"></script><script src="js/view.js" async="" charset="utf-8"></script><link href="css/share_style0_16.css" rel="stylesheet"><script src="js/course_common.js" async="" charset="utf-8"></script><script src="js/course_collection.js" async="" charset="utf-8"></script><script src="js/socket.js" async="" charset="utf-8"></script><script src="js/jquery.js" async="" charset="utf-8"></script><script src="js/layer.js" async="" charset="utf-8"></script><link href="css/layer.css" rel="stylesheet" charset="utf-8"></head>
<body>

<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo"><a href="http://www.imooc.com/" target="_self" class="hide-text">慕课网</a></div>
        <div class="g-menu-mini l">
            <a href="#" class="menu-ctrl">
                <i class="icon-menu"></i>
            </a>
            <ul class="nav-item l">
                <li>
                    <a href="http://www.imooc.com/course/list" target="_self">课程</a>
                </li>
                <li><a href="http://www.imooc.com/course/program" target="_self">计划</a></li>
                <li><a href="http://www.imooc.com/wenda" target="_self">猿问</a></li>
                <li><a href="http://www.imooc.com/article" target="_self">文章</a></li>
        <!--         <li><a href="/wiki"  target="_self">WIKI</a></li> -->
                                                                </ul>
        </div>
                <div id="login-area">
            <ul class="clearfix logined">
                <li class="header-app">
                    <a href="http://www.imooc.com/mobile/app">
                        <span class="icon-appdownload"></span>
                    </a>
                    <div class="QR-download">
                        <p id="app-text">慕课网APP下载</p>
                        <p id="app-type">iPhone / Android / iPad</p>
                        <img src="picture/QR-code.jpg">
                    </div>
                </li>
                <li class="remind_warp">
                    <i style="display: none;" class="msg_remind"></i>
                    <a target="_blank" href="http://www.imooc.com/u/3116765/notices"><i class="icon-notifi"></i></a>
                </li>
        	    <li class="my_message">
                    <a href="http://www.imooc.com/u/3116765/messages" title="我的消息" target="_blank">
                        <span class="msg_icon" style="display: none;"></span>
                        <i class="icon-mail"></i>
                        <span style="display: none;">我的消息</span>
                    </a>
                </li>
                <li class="set_btn user-card-box">
                    <a id="header-avator" class="user-card-item" action-type="my_menu" href="http://www.imooc.com/u/3116765/courses" target="_self"><img src="picture/56f9e5ab0001e7b101000100-40-40.jpg" height="40" width="40">
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card">
                        <div class="card-inner">
                            <div class="card-top">
                                <a href="http://www.imooc.com/u/3116765/courses"><img src="picture/56f9e5ab0001e7b101000100-100-100.jpg" alt="qq_本宫未死休想纳妾_03116765" class="l"></a>
                                <a href="http://www.imooc.com/u/3116765/courses"><span class="name text-ellipsis">qq_本宫未死休想纳妾_03116765</span></a>
                                <p class="meta">
					<a href="http://www.imooc.com/u/3116765/experience">经验<b id="js-user-mp">0</b></a>
					<a href="http://www.imooc.com/u/3116765/credit">积分<b id="js-user-credit">0</b></a>            </p>
                    
                                <a href="http://www.imooc.com/user/setprofile" class="icon-set setup"></a>
                            </div>
                            <!--
                            <div class="card-links">
                                <a href="/space/index" class="my-mooc l">我的慕课<i class="dot-update"></i></a>
                                <span class="split l"></span>
                                <a href="/myclub/myquestion/t/ques" class="my-sns l">我的社区</a>
                            </div>
                            -->
                                                        <div class="card-sets clearfix">
                                <a href="http://www.imooc.com/wenda/save" target="_blank" class="l mr30">发问题</a>
                                <a href="http://www.imooc.com/article/publish" target="_blank" class="l">写文章</a>
                                <a href="http://www.imooc.com/passport/user/logout?referer=http://www.imooc.com" class="r">退出</a>
                            </div>
                        </div>
                        <i class="card-arr"></i>
                    </div>
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
        
        
        <div class="search-warp clearfix" style="min-width: 32px; height: 60px;">
            <div style="display: none;" class="search-area min" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." autocomplete="off" type="text">
                <input class="btn_search" data-search-btn="search-btn" type="hidden">
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class="showhide-search" data-show="no"><i class="icon-search"></i></div>
        </div>
    </div>
</div>


<div id="main">

<div class="course-infos">
  <div class="w pr">

    <div class="hd">
      <h2 class="l"></h2>
            <a href="javascript:;" class="l video-desc-trigger" id="js-video-trigger">
        <i class="ic-video"></i>
      </a>
          </div>
    <div class="statics clearfix">
      <div class="static-item ">
        <span class="meta-value"><strong>初级</strong></span>
        <span class="meta">难度</span>
        <em></em>
      </div>
      <div class="static-item static-time">
        <span class="meta-value"><strong> 5</strong>小时<strong> 0</strong>分</span>
        <span class="meta">时长</span>
        <em></em>
      </div>
      <div class="static-item">
        <span class="meta-value"><strong>286519</strong></span>
        <span class="meta">学习人数</span>
        <em></em>
      </div>
      <!-- <div class="static-item">
        <span class="meta-value"><strong>4.8分</strong></span>
        <span class="meta">
          <i class="meta-star"></i>
          <i class="meta-star"></i>
          <i class="meta-star"></i>
        </span>
        <em></em>
      </div> -->
    </div>
    <div class="extra">
      <!-- credit -->
      <div style="display: none;" class="share-rl-tips share-posi js-share-statue">
          <span>分享即可 +</span><strong>1积分</strong>
          <span class="rule-arrow"></span>
      </div>
      <!-- share -->
      <div data-bd-bind="1459252125792" class="share-action r bdsharebuttonbox bdshare-button-style0-16">
        分享
        <a title="分享到微信" href="javascript:;" class="share wx js-share" data-cmd="weixin"></a>
        <a title="分享到QQ空间" href="javascript:;" class="share qq js-share" data-cmd="qzone"></a>
        <a title="分享到新浪微博" href="javascript:;" class="share sina js-share" data-cmd="tsina"></a>
      </div>
      <i class="split-line r"></i>
            <a href="javascript:;" data-cmd="follow" class="follow-action r js-follow-action" data-cid="85">
        关注
      </a>
          </div>
  </div>
  <div class="info-bg" id="js-info-bg">
    <div class="cover-img-wrap">
      <img data-src="http://img.mukewang.com/55af49c2000117af06000338.jpg" alt="" style="display: none" id="js-cover-img">
    </div>
    <div class="cover-mask"></div>
  <canvas id="js-cover-canvas" class="cover-canvas" height="240" width="1349"></canvas></div>
</div>
<div class="course-info-main clearfix w">
  <div class="info-bar clearfix">
    <div class="info-bar-box">
      
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="http://www.imooc.com/learn/85" class="btn-red start-study-btn r">开始学习</a>
            <div class="score-info">
    <div class="satisfaction-degree-info">
        <h3>满意度评分</h3>
        <h4>9.9</h4>
        <div class="star-box">
                                                <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                                            </div>
    </div><!--satisfaction-degree-info end-->
        <div class="condition-box">
        <div class="condition">
            <h3>内容实用</h3>
            <p>9.9</p>
        </div>
        <div class="condition">
            <h3>通俗易懂</h3>
            <p>9.6</p>
        </div>
        <div class="condition">
            <h3>逻辑清晰</h3>
            <p>9.4</p>
        </div>
    </div><!--condition-box end-->
            <p class="person-num noLogin"><a href="javascript:;" target="_blank">1337人评价</a></p>
    </div><!--score-info end-->    </div><!--info-bar-box end-->
  </div>
  <div class="content-wrap">
    <div class="content">
      <div class="course-brief">
        <h3 class="ctit">试题名称</h3>
        <p class="auto-wrap"><?php echo  $arr['c_name']?></p>
      </div>
      <div class="course-outline">
        <div class="bar clearfix">
          <h3 class="ctit l">试题答案</h3>

        </div>
        <div class="outline-list">
                      <ul>
                              <li class="chapter clearfix ">
                  <i class="chapter-icon"></i>
                  <div class="chapter-bd l">
                     <?php /* <h5 class="name">第1章 Java初体验</h5>*/ ?>
                      <p class="desc"><?php echo $arr['c_answer']?></p>
                  </div>
                </li>
                          </ul>
                              </div>
      </div>
      <div class="evaluation-list">
        <h3>试题评价</h3>
        <div class="evaluation-info clearfix">
          <p class="satisfaction">满意度评分：<em>9.9</em></p>
          <div class="star-box">
                                                <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                                              </div><!--star-box end-->
          <p>内容实用：9.9</p>
          <p>通俗易懂：9.6</p>
          <p>逻辑清晰：9.4</p>
          <p class="person_num"><em>1337</em>位同学参与评价</p>
        </div><!--evaluation-info end-->
                            <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/2738371" class="img-box">
                <img src="picture/567a7e4c0001c2be01690197-100-100.jpg" alt="518000">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/2738371" class="username">518000</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                          </div>
                </div><!--user-info end-->
                <p class="content"></p>
                <div class="info">
                  <span class="time">时间：4分钟前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <!--evaluation end-->
                        </div><!--evaluation-list end-->
            <div class="more-evaluation"><a href="#" target="_blank">查看更多评价</a></div>
          </div><!--content end-->
    <div class="aside r">
      <div class="bd">

      <div class="box mb40">
      <h4>讲师提示</h4>
            <div class="teacher-info">
        <a href="http://www.imooc.com/u/112258/courses?sort=publish" target="_blank">
          <img src="picture/535f03950001915501400140-80-80.jpg" height="80" width="80">
        </a>
        <span class="tit">
          <a href="http://www.imooc.com/u/112258/courses?sort=publish" target="_blank">laurenyang</a><i class="icon-imooc"></i>
        </span>
        <span class="job">JAVA开发工程师</span>
      </div>
                  <div class="course-info-tip">
                <dl class="first">
          <dt>课程须知</dt>
          <dd class="autowrap">此部分为Java入门课程，适合零基础的小伙伴们，赶紧开始学习吧。</dd>
        </dl>
                        <dl>
          <dt>老师告诉你能学到什么？</dt>
          <dd class="autowrap">1、会配置Java开发环境，并使用工具进行程序开发
2、掌握Java中基本语法的使用

</dd>
        </dl>
              </div>
        </div>
  
          
<div class="cp-other-learned  js-comp-tabs">
  <div class="cp-header clearfix">
    <h2 class="cp-tit l">该课的同学还学过</h2>
    <ul class="cp-tabs r">

            <li class="l">
        <a href="javascript:;" class="on js-comp-tab-item" data-pannel="course">课程</a>
      </li>
      <li class="l end"><a href="javascript:;" class="js-comp-tab-item" data-pannel="plan">计划</a></li>
          </ul>
  </div>
  <div class="cp-body">
    <div class="cp-tab-pannel js-comp-tab-pannel" data-pannel="course" style="display: block">
    <!-- img 200 x 112 -->
      <ul class="other-list">
                <li class="curr">
          <a href="http://www.imooc.com/view/124?src=sug" target="_blank">
            <img src="picture/53b65f70000148d306000338-240-135.jpg" alt="Java入门第二季">
            <span class="name autowrap">Java入门第二季</span>
          </a>
        </li>
                <li>
          <a href="http://www.imooc.com/view/110?src=sug" target="_blank">
            <img src="picture/537587c60001def606000338-240-135.jpg" alt="Java入门第三季">
            <span class="name autowrap">Java入门第三季</span>
          </a>
        </li>
                <li>
          <a href="http://www.imooc.com/view/9?src=sug" target="_blank">
            <img src="picture/529dc3380001379906000338-240-135.jpg" alt="HTML+CSS基础课程">
            <span class="name autowrap">HTML+CSS基础课程</span>
          </a>
        </li>
                <li>
          <a href="http://www.imooc.com/view/96?src=sug" target="_blank">
            <img src="picture/53bf89100001684e06000338-240-135.jpg" alt="Android攻城狮的第一门课（入门篇）">
            <span class="name autowrap">Android攻城狮的第一门课（入门篇）</span>
          </a>
        </li>
                <li>
          <a href="http://www.imooc.com/view/36?src=sug" target="_blank">
            <img src="picture/53e1d0470001ad1e06000338-240-135.jpg" alt="JavaScript入门篇">
            <span class="name autowrap">JavaScript入门篇</span>
          </a>
        </li>
              </ul>
    </div>
        <div class="cp-tab-pannel js-comp-tab-pannel" data-pannel="plan">
      <ul class="other-list">
                <li class="curr">
          <a href="http://www.imooc.com/course/programdetail/pid/29?src=sug" target="_blank">
            <img src="picture/55aef90d0001f2a502400180-240-135.jpg" alt="高德开发者必由之路——Android SDK篇">
            <span class="name autowrap">高德开发者必由之路——Android SDK篇</span>
          </a>
        </li>
                <li>
          <a href="http://www.imooc.com/course/programdetail/pid/31?src=sug" target="_blank">
            <img src="picture/56551e6700018b0c09600720-240-135.jpg" alt="Java工程师">
            <span class="name autowrap">Java工程师</span>
          </a>
        </li>
                <li>
          <a href="http://www.imooc.com/course/programdetail/pid/33?src=sug" target="_blank">
            <img src="picture/56551e450001afcd09600720-240-135.jpg" alt="Android工程师">
            <span class="name autowrap">Android工程师</span>
          </a>
        </li>
              </ul>
    </div>
      </div>
</div>

</div>    </div>
  </div>
  <div class="clear"></div>

</div>
<!-- 视频介绍 -->
<div id="js-video-wrap" class="video pop-video" style="display:none">
    <div class="video_box" id="js-video"></div>
    <a href="javascript:;" class="pop-close icon-close"></a>
</div>

</div>

<div id="footer">
    <div class="waper">
        <div class="footerwaper clearfix">
            <div class="followus r">
                <a class="followus-weixin" href="javascript:;" target="_blank" title="微信">
                    <div class="flw-weixin-box"></div>
                </a>
                <a class="followus-weibo" href="http://weibo.com/u/3306361973" target="_blank" title="新浪微博"></a>
                <a class="followus-qzone" href="http://user.qzone.qq.com/1059809142/" target="_blank" title="QQ空间"></a>
            </div>
            <div class="footer_intro l">
                <div class="footer_link">
                    <ul>
                        <li><a href="http://www.imooc.com/" target="_blank">网站首页</a></li>
                        <li><a href="http://www.imooc.com/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="http://www.imooc.com/about/contact" target="_blank">联系我们</a></li>
                        <li><a href="http://yun.imooc.com/" target="_blank">慕课云</a></li>
                        <li><a href="http://www.imooc.com/corp/index" target="_blank">合作专区</a></li>
                        <li><a href="http://www.imooc.com/about/us" target="_blank">关于我们</a></li>
                        <li> <a href="http://www.imooc.com/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="http://www.imooc.com/user/feedback" target="_blank">意见反馈</a></li>
                        <li> <a href="http://www.imooc.com/about/friendly" target="_blank">友情链接</a></li>
                    </ul>
                </div>
                <p>Copyright © 2016 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>
<div id="J_GotoTop" class="elevator">
    <a class="elevator-weixin" href="javascript:;">
        <div class="elevator-weixin-box">
        </div>
    </a>
    <a class="elevator-msg" href="http://www.imooc.com/user/feedback" target="_blank" id="feedBack"></a>
    <a class="elevator-app" href="http://www.imooc.com/mobile/app">
        <div class="elevator-app-box">
        </div>
    </a>
    <a class="elevator-top" href="javascript:;" style="display: none;" id="backTop"></a>
</div>



<!--script-->
<script src="js/ssologin.js"></script>
<script type="text/javascript" src="js/sea.js"></script>
<script type="text/javascript" src="js/sea_config.js"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>

 
<script type="text/javascript">
  (function(){
    var imgPic = GC.course.pic || 'http://img.mukewang.com/static/img/common/logo.png',
        text = '我正在参加@慕课网  的一门课程【' + GC.course.name + '】，很不错哦！快来一起学习吧！', //节名称
        url = 'http://www.mukewang.com' + window.location.pathname;

    window._bd_share_config = {
        "common": {
            "bdUrl": url,
            "bdSnsKey": {
              'tsina':'2788596354'
            },
            "bdText": text,
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": imgPic,
            "bdStyle": "0",
            "bdSize": "16"
        },
        "share": {}
    };
    with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
  })();
</script>
<div class="mask"></div>


<div style="display: none">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0cfcccd7b1393990c78efdeebff3968' type='text/javascript'%3E%3C/script%3E"));
(function (d) {
window.bd_cpro_rtid="rHT4P1c";
var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
})(document);
</script><script src="js/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img src="picture/21.gif" height="20" width="20" border="0"></a>
<script>
(function(){
    var bp = document.createElement('script');
    bp.src = '//push.zhanzhang.baidu.com/push.js';
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</div><script src="xiang_files/user.htm" type="text/javascript"></script><script src="xiang_files/iplookup.php" type="text/javascript"></script>


</body></html>