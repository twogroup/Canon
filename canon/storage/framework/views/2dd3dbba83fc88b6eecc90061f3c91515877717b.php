<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>面试宝典网</title>
    <meta property="wb:webmaster" content="a1bbe2238ec72e87" /><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <link rel = "Shortcut Icon" href=http://www.mbaodian.com/favicon.ico>
    <meta name="Keywords" content="面试，面试宝典，面试技巧，面试经验，面试简历，简历下载，面试试题">
    <script src="../js/push.js"></script>
    <script src="../js/rt.js" async="" type="text/javascript"></script>
    <script type="text/javascript">

        var OP_CONFIG={"module":"index","page":"index"};
        var isLogin = 0;
        var is_choice = "";
        var seajsTimestamp="v=201603251711";

    </script>

    <link rel="stylesheet" href="css/a.css" type="text/css">
    <script src="../js/jquery.js" async="" charset="utf-8"></script>
    <script src="../js/seajs-text.js" async="" charset="utf-8"></script>
    <script src="../js/common.js" async="" charset="utf-8"></script>
    <script src="../js/string.js" async="" charset="utf-8"></script>
    <script src="../js/suggest.js" async="" charset="utf-8"></script>
    <script src="../js/store.js" async="" charset="utf-8"></script>
    <script src="../js/json.js" async="" charset="utf-8"></script>
    <script src="../js/im.js" async="" charset="utf-8"></script>
    <script src="../js/index.js" async="" charset="utf-8"></script>
    <script src="../js/socket.js" async="" charset="utf-8"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" type="text/css" href="../static/css/ui2.css?2013032917">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->  <!---->
    </head>
<body id="index">
    

<?php $__env->startSection('sidebar'); ?>
@parent
<!--  
<div class="g-banner">
  <div class="g-banner-content">
        <div class="banner-slide" style="background-image: url(images/index-band.jpg); display: none;">
            <a href="javascript:;" style="cursor: default" class="click-help"></a>
            <div class="inner">
                <h3 class="banner-tit"></h3>
                <a href="javascript:void(0);" id="js-play-video" class="more">了解更多</a>
            </div>
        </div>
        <div class="banner-slide slide-active" style=" background-image: url(images/banner2.jpg); display: block;">
            <a href="#" data-ast="bigbanner_1_243" class="click-help"></a>
            <div class="inner">
                <h3 class="banner-tit">面试宝典,开启成功之路</h3>
            </div>
        </div>
    </div>
   
</div>-->
<div id="js-index-video" class="video-container">
    <div class="video-wrap" id="js-video-wrap">
        <div id="js-video"></div>
    </div>
    <div class="video-mask"></div>
    <div id="js-video-close" class="video-close"></div>
</div>


<div class="modal in" id="login-modal"> <a class="close" data-dismiss="modal">×</a>
    <h1>登录</h1>
    <ul class="login-bind-tp">
        <?php /*<li class="qweibo"> <a href="http://sc.chinaz.com"><em>&nbsp;</em> QQ登录</a> </li>
        <li class="sina"> <a href="http://sc.chinaz.com"><em>&nbsp;</em> 微博登录</a> </li>*/ ?>
    </ul>
    <a href=""> <p>还没有账号,立即注册</p></a><br>
    <form class="login-form clearfix" method="post" action="">

        <div class="form-arrow"></div>
        <input id="u_name" type="text" placeholder="手机号或邮箱：">
        <font color="red"><span id="sp_name"></span></font>

        <input id="password" type="password" placeholder="密码：">
        <font color="red"> <span id="sp_pwd"></span></font>

        <input type="button" name="type" class="button-blue login" value="登录" id="sub">
        <input type="hidden" name="return-url" value="">
        <div class="clearfix"></div>
        <label class="remember">
            <input name="remember" type="checkbox" checked/>
            下次自动登录 </label>
        <a class="forgot">忘记密码？</a>
        <ul class="third-parties">
            <li>
                <p data-url="">新浪微博帐号</p>
            </li>
            <li>
                <p data-url="">腾讯微博帐号</p>
            </li>
            <li>
                <p data-url="">豆瓣帐号</p>
            </li>
            <li>
                <p data-url=""></p>
            </li>
        </ul>
    </form>
</div>

<div class="modal in" id="signup-modal" > <a class="close" data-dismiss="modal">×</a>
    <h1>注册</h1>
    <ul class="login-bind-tp">
        <?php /*<li class="qweibo"> <a href="#"><em>&nbsp;</em> QQ登录</a> </li>
        <li class="sina"> <a href="#"><em>&nbsp;</em> 微博登录</a> </li>*/ ?>
    </ul>
    <p><a href="index">已有账号,直接登录</p></a><br/>
    <form class="signup-form clearfix" method="post" action="reg">
        <?php /*<form class="valid-form" id="js-signup-form" autocomplete="off" action='reg' method='post' onsubmit="return sub()">*/ ?>
        <?php /*<script>*/ ?>
            <?php /*function zhu(){*/ ?>
                <?php /*// alert(checkname());*/ ?>
              <?php /*//  if(flag&&emailflag&&phoneflag){*/ ?>
		<?php /*if(flag&&emailflag&&phoneflag)*/ ?>
                    <?php /*return true;*/ ?>
                <?php /*}else{*/ ?>
                    <?php /*return false;*/ ?>
                <?php /*}*/ ?>
            <?php /*}*/ ?>
        <?php /*</script>*/ ?>
        <p class="error"></p>
        <input type="text" name="username" id="username" data-validate="email" autocomplete="off" class="ipt ipt-email" placeholder="请输入名称 " onblur="checkname();"><font color="red" ><p class="tips" id="name_sp"></p></font>
        <input type="password" name="password"  class="ipt ipt-pwd js-pass-pwd" placeholder="6-16位密码，不能用空格" id="pwd"  style="background-image:url('');
   background-position:right bottom"><font color="red"><p class="tips" id="pwd_sp"></p></font>

        <input type="text" name="email" data-validate="nick" class="ipt ipt-nick" placeholder="邮箱格式:@ . com" id="email" onblur="checkemail();"><font color="red"><p class="tips" id="email_sp"></p></font>
        <input type="text" name="phone" data-validate="nick" class="ipt ipt-nick" placeholder="手机号为11位 " id="phone" onblur="checkphone();"><font color="red"><p class="tips" id="phone_sp"></p></font>

        <input type="button" name="type" class="button-blue reg" value="注册" data-category="UserAccount" data-action="regist" onclick="zhu()" >

        <ul class="third-parties">
            <li>
                <p data-url="">新浪微博帐号</p>
            </li>
            <li>
                <p data-url="">腾讯微博帐号</p>
            </li>
            <li>
                <p data-url="">豆瓣帐号</p>
            </li>
            <li>
                <p data-url=""></p>
            </li>
        </ul>
    </form>
</div>


<div id="mooc-dynamic" class="dynamic bg-grey idx-minwidth" style=" margin-top:20px;">
    <div id="dynamic-wrap" class="dynamic-wrap idx-width">
        <div id="dynamic-left" class="dynamic-left"></div>
        <div id="dynamic-right" class="dynamic-right"></div>


        <ul class="dynamic-group clearfix">



            <li><a href="#">
                    <img src="picture/zzzz.jpg" alt="手机APP">
                </a></li>

            <li><a href="#" target="_blank"><img src="picture/5677ae970001c70404000200.jpg" alt="苹果表"></a></li>

            <li><a href="#" target="_blank">
                    <img src="picture/56a59f870001bd2e04000200.jpg" alt="前端学习计划"></a></li>
        </ul>

    </div>
</div>

<!--试题开始-->
<div class="icourse">
    <div class="incourse-wrap idx-width">
        <h2 class="icourse-title hide-text">试题</h2>
        <ul class="icourse-course clearfix">
            <?php foreach($shi as $k=>$v){?>
            <li>
                <a  href="college_exam?id=<?php echo $v['s_id']?>">
                    <div class="icourse-img">
                        <img src="http://123.56.249.121/android/web/<?php echo $v['s_img']?>" alt="">
                    </div>
                    <div class="icourse-intro clearfix">
                        <p>公司:<?php echo $v['company_name']?></p>
            <span class="l ">
                              <?php echo $v['addtime']?>
                          </span>
            <span class="r">
              课程时长：29分
            </span>
                    </div>
                    <div class="icourse-tips clearfix">
                        <h2><?php echo $v['s_logo']?></h2>
                        <span class="l "><?php echo substr($v['addtime'],'0','10')?></span>
                        <span class="r"><?php echo $v['click']?>人学习</span>
                    </div>
                </a>
            </li>
                <?php } ?>

        </ul>
    </div>
</div>
<!--试题结束 -->

<!--招聘开始 -->
<div class="icourse">
    <div class="incourse-wrap idx-width">
        <h2 class="icourse-title hide-text">招聘</h2>
        <ul class="icourse-course clearfix">
            <?php foreach($shi as $k=>$v){?>
            <li>
                <a  href="college_exam?id=<?php echo $v['s_id']?>" target="_blank">
                    <div class="icourse-img">
                        <img src="http://123.56.249.121/android/web/<?php echo $v['s_img']?>" alt="">
                    </div>
                    <div class="icourse-intro clearfix">
                        <p>公司:<?php echo $v['company_name']?></p>
            <span class="l ">
                              <?php echo $v['addtime']?>
                          </span>
            <span class="r">
              课程时长：29分
            </span>
                    </div>
                    <div class="icourse-tips clearfix">
                        <h2><?php echo $v['s_logo']?></h2>
                        <span class="l "><?php echo substr($v['addtime'],'0','10')?></span>
                        <span class="r"><?php echo $v['click']?>人学习</span>
                    </div>
                </a>
            </li>
                <?php } ?>

        </ul>
    </div>
</div>
<!--招聘结束 -->

<!--面试方法开始 -->

<div class="icourse">
    <div class="incourse-wrap idx-width">
        <h2 class="icourse-title hide-text">面试方法</h2>
        <ul class="icourse-course clearfix">
            <?php foreach($shi as $k=>$v){?>
            <li>
                <a  href="college_exam?id=<?php echo $v['s_id']?>" target="_blank">
                    <div class="icourse-img">
                        <img src="http://123.56.249.121/android/web/<?php echo $v['s_img']?>" alt="">
                    </div>
                    <div class="icourse-intro clearfix">
                        <p>公司:<?php echo $v['company_name']?></p>
            <span class="l ">
                              <?php echo $v['addtime']?>
                          </span>
            <span class="r">
              课程时长：29分
            </span>
                    </div>
                    <div class="icourse-tips clearfix">
                        <h2><?php echo $v['s_logo']?></h2>
                        <span class="l "><?php echo substr($v['addtime'],'0','10')?></span>
                        <span class="r"><?php echo $v['click']?>人学习</span>
                    </div>
                </a>
            </li>
                <?php } ?>

        </ul>
    </div>
</div>
<!--面试方法结束 -->

<!--简历开始 -->


<div class="icourse">
    <div class="incourse-wrap idx-width">
        <h2 class="icourse-title hide-text">简历</h2>
        <ul class="icourse-course clearfix">
            <?php foreach($shi as $k=>$v){?>
            <li>
                <a  href="college_exam?id=<?php echo $v['s_id']?>" target="_blank">
                    <div class="icourse-img">
                        <img src="http://123.56.249.121/android/web/<?php echo $v['s_img']?>" alt="">
                    </div>
                    <div class="icourse-intro clearfix">
                        <p>公司:<?php echo $v['company_name']?></p>
            <span class="l ">
                              <?php echo $v['addtime']?>
                          </span>
            <span class="r">
              课程时长：29分
            </span>
                    </div>
                    <div class="icourse-tips clearfix">
                        <h2><?php echo $v['s_logo']?></h2>
                        <span class="l "><?php echo substr($v['addtime'],'0','10')?></span>
                        <span class="r"><?php echo $v['click']?>人学习</span>
                    </div>
                </a>
            </li>
                <?php } ?>

        </ul>
    </div>
</div>
<!--面试简历结束 -->

<!--答疑开始 -->


<div class="icourse">
    <div class="incourse-wrap idx-width">
        <h2 class="icourse-title hide-text">答疑</h2>
        <ul class="icourse-course clearfix">
            <?php foreach($shi as $k=>$v){?>
            <li>
                <a  href="college_exam?id=<?php echo $v['s_id']?>" target="_blank">
                    <div class="icourse-img">
                        <img src="http://123.56.249.121/android/web/<?php echo $v['s_img']?>" alt="">
                    </div>
                    <div class="icourse-intro clearfix">
                        <p>公司:<?php echo $v['company_name']?></p>
            <span class="l ">
                              <?php echo $v['addtime']?>
                          </span>
            <span class="r">
              课程时长：29分
            </span>
                    </div>
                    <div class="icourse-tips clearfix">
                        <h2><?php echo $v['s_logo']?></h2>
                        <span class="l "><?php echo substr($v['addtime'],'0','10')?></span>
                        <span class="r"><?php echo $v['click']?>人学习</span>
                    </div>
                </a>
            </li>
                <?php } ?>

        </ul>
    </div>
</div>
<!--答疑结束 -->
        <h2 class="mobile-title hide-text">手机宝典，随时随地学习！</h2>
        <div class="mobile-entry">
            <a href="http://www.imooc.com/mobile/app" target="_blank"><!-- Android版 -->手机版</a>
            <a href="http://www.imooc.com/mobile/app?curr=ipad" target="_blank"><!-- IOS版 -->iPad版</a>
            <span id="js-mobile-trigger" class="mobile-trigger"></span>
        </div>
<!--script-->
<SCRIPT src="../js/jquery-1.9.1.min.js" type="text/javascript"></SCRIPT>
<script>

    var flag=false;
    $('#username').blur(function(){
       // alert(123);
        var username=$(this).val();
        //alert(username);
        var reg = /^[0-9a-zA-Z\u4e00-\u9fa5_]{3,16}$/;
        if(reg.test(username)){
            $('#name_sp').html('');
            //alert(123);
            flag=true;
            return flag;
        }else if(username=='') {
            $('#name_sp').html('用户名不能为空');
            //alert(123);
            flag=true;
            return flag;
        }else{
            $('#name_sp').html('只能中英文，数字，下划线,3-16位');
            // alert(456);
            return flag;
        }
    })
    var pwdflag=false;
    $('#pwd').blur(function(){
        // alert(123);
        var pwd=$(this).val();
        //alert(pwd);
        var reg = /^[a-zA-Z]\w{5,15}$/;
        if(reg.test(pwd)){
            $('#pwd_sp').html('');
            //alert(123);
            pwdflag=true;
            return pwdflag;
        }else if(pwd=='') {
            $('#pwd_sp').html('密码不能为空');
            //alert(123);
            pwdflag=true;
            return pwdflag;
        }else{
            $('#pwd_sp').html('以字母开头，只能包含字符、数字和下划线');
            // alert(456);
            return pwdflag;
        }
    })
    var emailflag=false;
    $('#email').blur(function(){
        var email=$("#email").val();
        var reg = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;//^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$
        if(reg.test(email)){
            // alert(123)
            $("#email_sp").html('')
            emailflag=true;
            return emailflag;
        }else if(email=='') {
            $('#email_sp').html('邮箱不能为空');
            //alert(123);
            emailflag=true;
            return emailflag;
        }else{
            // alert(456)
            // alert(456)
            $("#email_sp").html('邮箱格式错误')
            return emailflag;
        }
    })
    var phoneflag=false;
    $("#phone").blur(function(){
        var phone=$("#phone").val();
        var reg = /^[1][358][0-9]{9}$/;
        if(reg.test(phone)){
            $("#phone_sp").html('')
            phoneflag=true;
            return phoneflag;
        }else if(phone==''){
            $("#phone_sp").html('手机号不能为空')
            phoneflag=true;
            return phoneflag;
        }else{
            $("#phone_sp").html('手机号必须以13、15、18开头');
            return phoneflag;
        }
    })
    function zhu() {
        if (flag&pwdflag&emailflag&phoneflag){
            //alert('NO')
            return true;
        }else{
            return false;
        }
    }

    function show(){
        if(this.aa.password.type='password'){
            box.innerHTML = "<input type='text' name='password'  value="+this.aa.password.value+">";
            box3.innerHTML = "<a href='javascript:void(0)' onclick='hid();'>隐藏密码</a>";
        }
    }
    function hid(){
        if(this.aa.password.type='text'){
            box.innerHTML = "<input type='password' name='password'  value="+this.aa.password.value+">";
            box3.innerHTML = "<a href='javascript:void(0)' onclick='show();'>显示密码</a>";
        }
    }



    $("#u_name").blur(function() {
        var u_name = $("#u_name").val();
        var reg = /^1\d{10}$/;
        var email_reg = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
        if (reg.test(u_name)) {
            // alert(u_name)
            $.post('name', {
                u_name: u_name
            }, function (data) {
                //alert(data)
                if (data == 1) {
                    $("#sp_name").html('')
                } else if (data == 2) {
                    $("#sp_name").html('不存在')
                }
       })

        } else if (email_reg.test(u_name)) {
            $.post('email', {
                u_name: u_name
            }, function (data) {
                if (data == 1) {
                    $("#sp_name").html('')
                } else if (data == 2) {
                    $("#sp_name").html('不存在')
                }
            })
        } else {
            $("#sp_name").html('格式错误')
        }
    })
    $("#password").keyup(function() {

        var u_name = $("#u_name").val()
        var u_pwd = $("#password").val()
        var reg = /^1\d{10}$/;
        var email_reg = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
        if (reg.test(u_name)) {
            $.post('name_pwd', {
                u_name: u_name,
                u_pwd: u_pwd
            }, function (data) {
                if (data == 3) {
                    $("#sp_pwd").html('')
                } else if (data == 4) {
                    $("#sp_pwd").html('密码错误');
                }
            })
        } else if (email_reg.test(u_name)) {
            $.post('email_pwd', {
                u_name: u_name,
                u_pwd: u_pwd
            }, function (data) {
                if (data == 3) {
                    $("#sp_pwd").html('')
                } else if (data == 4) {
                    $("#sp_pwd").html('密码错误');
                }
            })
        }
    })
    $("#sub").click(function(){
    var sp_name=$("#sp_name").html();
        var sp_pwd=$("#sp_pwd").html();
        var u_name=$("#u_name").val();
        var u_pwd=$("#password").val();

        if(sp_name=='' && sp_pwd==''){
            var reg = /^1\d{10}$/;
            var email_reg = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
            if (reg.test(u_name)) {
                $.post('name_deng',{
                    u_name:u_name,
                    u_pwd:u_pwd
                },function(data){
                    if(data==5){
                        alert('登陆成功');location.href='index';
                    }else if(data==6){
                        alert('登陆失败');location.href='login';
                    }
                })
            }else if(email_reg.test(u_name)){
                $.post('email_deng',{
                    u_name:u_name,
                    u_pwd:u_pwd
                },function(data){
                    if(data==5){
                        alert('登陆成功');location.href='index';
                    }else if(data==6){
                        alert('登陆失败');location.href='login';
                    }
                })
            }


        }else{
            alert("条件不成立");
        }
    })
</script>
</body>
<?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>