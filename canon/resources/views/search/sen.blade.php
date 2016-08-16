<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>试题</title>
</head>
<body>
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
</body>
</html>