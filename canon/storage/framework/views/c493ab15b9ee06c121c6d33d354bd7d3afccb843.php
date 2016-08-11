 <div class="js-course-lists" id="list">
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