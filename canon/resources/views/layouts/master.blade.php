<script src="../js/jquery.js" async="" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="../static/css/ui2.css?2013032917">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->  <!---->
@section('sidebar')
<div id="header">
    <div class="page-container" id="nav">
        <a href="http://www.canon.com/" target="_self">
            <img src="/images/login.png" style="float: left; padding-top:6px;">
        </a>
        <a href="index" target="_self" class="hide-text"></a>
        <div class="g-menu-mini l">
            <a href="#" class="menu-ctrl">
                <i class="icon-menu"></i>
            </a>
            <ul class="nav-item l">
                <li><a href="shiti"  target="_self">试题</a></li>
                <li><a href="program"  target="_self">招聘</a></li>
                <li><a href="article"  target="_self">方法</a></li>
                <li><a href="company"  target="_self">简历</a></li>
                <li><a href="wenda" target="_self">答疑</a></li>
            </ul>
        </div>

        <div id="login-area" >
            <ul    
    
            @if(empty(Session::get('username')))
             class="header-unlogin clearfix" 
            @else 
                class="clearfix logined" 
            @endif
            >
                <li class="header-app">
                    <a href="/mobile/app">
                        <span class="icon-appdownload"></span>
                    </a>
                    <div class="QR-download">
                        <p id="app-text">面试宝典APP下载</p>
                        <!--<p id="app-type">iPhone / Android / iPad</p>-->
                        <img src="/images/erweima.png">
                    </div>
                </li>
                
                <?php
                    if(empty(Session::get('username'))){
                ?>
                <li class="header-signin">
                    <a href="#login-modal" id="" data-category="UserAccount" data-action="login" data-toggle="modal" >登录</a>
                </li>
                <li class="header-signup">
                    <a href="#signup-modal" id="js-signup-btn" data-category="UserAccount" data-action="login" data-toggle="modal" >注册</a>
                </li>
                <?php
                    }else{
                ?>
 
                <li class="remind_warp">
                    <i class="msg_remind" style="display: none;"></i>
                    <a href="/sms/messagesone" target="_blank"><i class="icon-notifi"></i></a>
                </li>
        	    <li class="my_message">
                    <a target="_blank" title="我的消息" href="/sms/messages">
                        <span style="display: inline;" class="msg_icon">3</span>
                        <i class="icon-mail"></i>
                        <span style="display: none;">我的消息</span>
                    </a>
                </li>
                <li class="set_btn user-card-box">
                    <a target="_self" href="/u/3071208/courses" action-type="my_menu" class="user-card-item" id="header-avator">
                        <img width="40" height="40" src="/images/unknow-40.png">
                        <i style="display: none;" class="myspace_remind"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card">
                        <div class="card-inner">
                            <div class="card-top">
                                <a href="/u/3071208/courses">
                                    <img class="l" alt="<?php echo Session::get('username'); ?>" src="/images/unknow-160.png">
                                </a>
                                <a href="/u/3071208/courses">
                                    <span class="name text-ellipsis"><?php echo Session::get('username'); ?></span>
                                </a>
                                <p class="meta">
                					<!-- <a href="/u/3071208/experience">经验<b id="js-user-mp">550</b></a>
                					<a href="/u/3071208/credit">积分<b id="js-user-credit">0</b></a>  -->           
                                </p>
                                <a class="icon-set setup" href="/user/setprofile"></a>
                            </div>
                            <!--
                            <div class="card-links">
                                <a href="/space/index" class="my-mooc l">我的慕课<i class="dot-update"></i></a>
                                <span class="split l"></span>
                                <a href="/myclub/myquestion/t/ques" class="my-sns l">我的社区</a>
                            </div>
                            -->
                            <!-- <div class="card-history">
                                <span class="history-item">
                                    <span class="tit text-ellipsis">python进阶</span>
                                    <span class="media-name text-ellipsis">2-9 闭包</span>
                                    <i class="icon-clock"></i>
                                     <a class="continue" href="/video/6059">继续</a>
                                </span>
                            </div> -->
                            <div class="card-sets clearfix">
                                <a class="l" target="_blank" href="/user/setprofile">个人信息</a>
                                <!-- <a class="l mr30" target="_blank" href="/wenda/save">发问题</a>
                                <a class="l" target="_blank" href="/article/publish">写文章</a> -->
                                <a class="r" href="/out?referer=http://www.mbaodian.com/">退出</a>
                            </div>
                        </div>
                        <i class="card-arr"></i>
                    </div>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>

        <div class="search-warp clearfix" style="min-width: 32px; height: 60px;">
            <div style="" class="search-area" data-search="top-banner">
                <input class="search-input" id="sousuo" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." autocomplete="off" type="text">
                <input class="btn_search" data-search-btn="search-btn" type="hidden">
                <ul style="" class="search-area-result" data-suggest-result="suggest-result"></ul>
            </div>
            <div class="showhide-search" data-show="no"><i class="icon-search"></i></div>
        </div>
    </div>
</div>

<script src="/static/js/landing-min.js?2013032917"></script>

<div style="text-align:center;clear:both"></div>


<div class="modal in" id="login-modal"> <a class="close" data-dismiss="modal">×</a>
    <h1>登录</h1>
    <ul class="login-bind-tp">
    </ul>
    <a href="#"> <p>还没有账号,立即注册</p></a><br>
    <form class="login-form clearfix" method="post" action="">

        <div class="form-arrow"></div>
        <input id="u_name" type="text" placeholder="手机号或邮箱：">
        <font color="red"><span id="sp_name"></span></font>

        <input id="password" type="password" placeholder="密码：">
        <font color="red"> <span id="sp_pwd"></span></font>

        <input type="button" name="type" class="button-blue login" value="登录" id="sub">
        <input type="hidden" name="return-url" value="">
        <div class="clearfix"></div>

        <label class="remember"><input name="remember" type="checkbox" checked/>下次自动登录 </label>

        <a class="forgot">忘记密码？</a>

        <ul class="">
            <span id="hzy_fast_login"></span>
        </ul>
    </form>
    <script type="text/javascript" src="http://open.51094.com/user/myscript/157adb95828f91.html"></script>
</div>

<div class="modal in" id="signup-modal" > <a class="close" data-dismiss="modal">×</a>
    <h1>注册</h1>
    <ul class="login-bind-tp"></ul>
    <p><a href="#">已有账号,直接登录</p></a><br/>
    <form class="signup-form clearfix" method="post" action="reg">
        <p class="error"></p>
        <input type="text" name="username" id="username" data-validate="email" autocomplete="off" class="ipt ipt-email" placeholder="请输入名称 ">
        <font color="red" ><p class="tips" id="name_sp"></p></font>

        <input type="password" name="password"  class="ipt ipt-pwd js-pass-pwd" placeholder="6-16位密码，不能用空格" id="pwd" style="background-image:url(''); background-position:right bottom">
        <font color="red"><p class="tips" id="pwd_sp"></p></font>

        <input type="text" name="email" data-validate="nick" class="ipt ipt-nick" placeholder="邮箱格式:@ . com" id="email">
        <font color="red"><p class="tips" id="email_sp"></p></font>

        <input type="text" name="phone" data-validate="nick" class="ipt ipt-nick" placeholder="手机号为11位 " id="phone">
        <font color="red"><p class="tips" id="phone_sp"></p></font>

        <input type="button" name="type" id="button" class="button-blue reg" value="注册" data-category="UserAccount" data-action="regist"  >
        <ul class="third-parties">
        </ul>
    </form>
</div>
<div id="searchs">
    

<SCRIPT src="../js/jquery-1.9.1.min.js" type="text/javascript"></SCRIPT>
<script>
    $("#button").click(function(){
        var username=$('#username').val();
        var pwd=$('#pwd').val();
        var email=$("#email").val();
        var phone=$("#phone").val();
        if(username == ''){
            $('#name_sp').html('用户名不能为空');
            ajax.abort();//终止请求动作.
        }else if(pwd == ''){
            $('#pwd_sp').html('密码不能为空');
            ajax.abort();//终止请求动作.
        }else if(email == ''){
            $('#email_sp').html('邮箱不能为空');
            ajax.abort();//终止请求动作.
        }else if(phone == ''){
            $("#phone_sp").html('手机号不能为空');
            ajax.abort();//终止请求动作.
        }
    })
    $('#username').blur(function(){
        var username=$('#username').val();
        var reg = /^[0-9a-zA-Z\u4e00-\u9fa5_]{2,16}$/;
        if(reg.test(username)) {
            $('#name_sp').html('');
        } else if(username=='') {
            $('#name_sp').html('用户名不能为空');
        } else {
            $('#name_sp').html('只能中英文，数字，下划线,3-16位');
        }
    })
    $('#pwd').blur(function(){
        var pwd=$(this).val();
        var reg = /^[a-zA-Z]\w{5,15}$/;
        if(reg.test(pwd)) {
            $('#pwd_sp').html('');
        } else if(pwd==''){
            $('#pwd_sp').html('密码不能为空');
        } else {
            $('#pwd_sp').html('以字母开头，只能包含字符、数字和下划线');
        }
    })
    $('#email').blur(function(){
        var email=$("#email").val();
        var reg = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
        if(reg.test(email)) {
            $("#email_sp").html('')
        } else if(email=='') {
            $('#email_sp').html('邮箱不能为空');
        } else {
            $("#email_sp").html('邮箱格式错误')
        }
    })
    $("#phone").blur(function(){
        var phone=$("#phone").val();
        var reg = /^[1][358][0-9]{9}$/;
        if(reg.test(phone)) {
            $("#phone_sp").html('')
        } else if(phone=='') {
            $("#phone_sp").html('手机号不能为空');
        } else {
            $("#phone_sp").html('手机号必须以13、15、18开头');
        }
    })

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
        if (u_name!='') {
            var reg = /^[1][358][0-9]{9}$/;
            var email_reg = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
            if(reg.test(u_name) || email_reg.test(u_name)){
                $("#sp_name").html('')
            }else{
                $("#sp_name").html('请输入正确的手机号或邮箱')
            }
        }else{
            $("#sp_name").html('请输入正确的手机号或邮箱')
        }
    })

    $("#password").blur(function() {
        var u_name = $("#u_name").val()
        var u_pwd = $("#password").val()
        if(u_pwd!=''){
            var reg = /^[1][358][0-9]{9}$/;
            var email_reg = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
            if(reg.test(u_name) ||　email_reg.test(u_name)) {
                $("#sp_pwd").html('')
            }
        }else{
            $("#sp_pwd").html('请输入6-16位密码，不能使用空格')
        }
    })

    $("#sub").click(function(){
        var u_name=$("#u_name").val();
        var u_pwd=$("#password").val();
        var reg = /^[1][358][0-9]{9}$/;
        var email_reg = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
        if(u_name==''){
            $("#sp_name").html('请输入正确的手机号或邮箱');
            ajax.abort();//终止请求动作.
        }else if(u_pwd==''){
            $("#sp_pwd").html('请输入6-16位密码，不能使用空格');
            ajax.abort();//终止请求动作.
        }
        $.post("name_deng",{'u_name':u_name,'u_pwd':u_pwd}, function (msg) {
            if(msg==1){
                location.href="index";
            }else{
                $("#sp_pwd").html('密码错误');
                ajax.abort();//终止请求动作.
            }
        })
    })


    $('.showhide-search').click(function(){
       var sou=$('#sousuo').val();
        //alert(sou);die;
        $.ajax({
            type: "POST",
            url: "lalala",
            data: {sou:sou},
            success: function(msg){
                $("#searchs").html(msg);
            }
        });
    });

</script>