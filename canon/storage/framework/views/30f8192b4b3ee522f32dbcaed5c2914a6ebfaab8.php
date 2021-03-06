﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        实战开发课程_IT培训精品课程_慕课网
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Cache-Control" content="no-transform " />

    <meta name="Keywords" content="" />


    <meta name="Description" content="慕课网精品课程，为您提供专业的IT实战开发课程，包含前端开发、后端开发、移动端开发、数据处理、图像处理等各方面IT技能，课程全面、制作精良、讲解通俗易懂。"/>



    <link rel="stylesheet" href="css/d79d81e9ab144c28aae8b073106e6881.css" type="text/css" />
</head>
<body  id="List_courseId">


<?php $__env->startSection('sidebar'); ?>
    @parent



<div id="main">

    <div class="container">
        <div class="course-content">
            <div class="course-nav-box">
                <div class="course-nav-hd">
                    <span>全部课程</span>
                    <a href="/about/recruit" class="for-teacher hide-text" title="应聘讲师" target="_blank">应聘讲师</a>
                </div>
                <div class="course-nav-row clearfix">
                    <span class="hd l">类型：</span>
                    <div class="bd">
                        <ul class="">
                            <li class="course-nav-item on" class="type" id="type">
                               <a href="sou?type=1"> 全部</a>
                            </li>
                            <?php foreach($arr as $k=>$v){?>
                            <li class="course-nav-item" value="<?php echo $v['t_name']?>" class="type">
                               <a href='sou?type="<?php echo $v['t_name']?>"'>
                               <?php echo $v['t_name']?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="course-nav-row clearfix">
                    <span class="hd l">专业：</span>
                    <div class="bd">
                        <ul class="">
                            <li class="course-nav-item on">
                               <a href="sou?zhuan=1"> 全部</a>
                            </li>
                        <?php foreach($zhuan as $k=>$v){?>
                            <li class="course-nav-item ">
                                <a href='sou?zhuan="<?php echo $v['d_name']?>"'>
                                <?php echo $v['d_name']?></a>
                            </li>
                        <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="course-nav-row clearfix">
                    <span class="hd l">难度：</span>
                    <div class="bd">
                        <ul class="">
                            <li class="course-nav-item  on">
                                <a href="/course/list?is_easy=0">全部</a>
                            </li>
                            <li class="course-nav-item ">
                                <a href="/course/list?is_easy=1">初级</a>
                            </li>
                            <li class="course-nav-item ">
                                <a href="/course/list?is_easy=2">中级</a>
                            </li>
                            <li class="course-nav-item ">
                                <a href="/course/list?is_easy=3">高级</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="course-tool-bar clearfix">
                <div class="tool-left l">
                    <a href="/course/list?sort=last" class="sort-item">最新</a>
                    <a href="/course/list?sort=pop" class="sort-item active">最热</a>
                </div>
                <div class="l">
                    <span class="tool-item" style="display: none;">
                        <a class="follow-learn tool-chk" href="javascript:void(0);">跟我学</a>
                    </span>
                </div>
                <div class="tool-right r">
                                        <span class="tool-item total-num">
                        共<b>511</b>个课程
                    </span>
                    <span class="tool-item tool-pager">
                                                <span class="pager-num">
                            <b class="pager-cur">1</b>/<em class="pager-total">26</em>
                        </span>
                                                <a href="javascript:void(0)" class="pager-action pager-prev hide-text disabled">上一页</a>

                                                <a href="/course/list?page=2" class="pager-action pager-next hide-text">下一页</a>
                                            </span>
                </div>
            </div>
            <div class="course-list">
                <div class="js-course-lists">
                    <ul>


                    <?php foreach($shi as $k=>$v){?>
                        <li class="course-one">
                            <a href="/view/9" target="_self">
                                <div class="course-list-img">
                                    <img width="240" height="135" alt="HTML+CSS基础课程" src="picture/53b65f70000148d306000338-240-135.jpg">
                                </div>
                                <h5>
                                    <span><?php echo $v['c_name']?></span>
                                </h5>
                                <div class="tips">
                                    <p class="text-ellipsis">类型:<?php echo $v['c_type']?></p>
                                    <p class="text-ellipsis">专业:<?php echo $v['c_direction']?></p>
                                    <span class="l ">更新完毕</span>

                <span class="l ml20">
                                <?php  echo $v['c_num']?>
                                人学习</span>
                                </div>
            <span class="time-label">
                                    9小时17分钟 | 初级
                            </span>
                                <b class="follow-label">跟我学</b>
                            </a>
                        </li>
                    <?php } ?>

                    </ul>
                </div>
                <div class="page"><span class="disabled_page">首页</span><span class="disabled_page">上一页</span><a href="javascript:void(0)" class="active">1</a><a href="/course/list?page=2">2</a><a href="/course/list?page=3">3</a><a href="/course/list?page=4">4</a><a href="/course/list?page=5">5</a><a href="/course/list?page=6">6</a><a href="/course/list?page=7">7</a><a href="/course/list?page=2">下一页</a><a href="/course/list?page=26">尾页</a></div>
            </div>
        </div>
    </div>

</div>


<div id="J_GotoTop" class="elevator">
    <a class="elevator-weixin" href="javascript:;">
        <div class="elevator-weixin-box">
        </div>
    </a>
    <a class="elevator-msg" href="/user/feedback" target="_blank" id="feedBack"></a>
    <a class="elevator-app" href="http://www.imooc.com/mobile/app" >
        <div class="elevator-app-box">
        </div>
    </a>
    <a class="elevator-top" href="javascript:;" style="display:none" id="backTop"></a>
</div>

<script src="js/jquery-1.8.3.min.js"></script>


</body>
<?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>