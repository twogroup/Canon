<ul class="clearfix">
                <?php foreach($arr as $key=>$value): ?>
                    <li class="course-one">
                        <a href="#" title="<?php echo e($value['r_id']); ?>">
                                <b><font color="red"><?php echo e($value['company_name']); ?></font></b><br><br>
                                <span style="display:block;">招聘职位:<font color='#999d9c'><?php echo e($value['position_name']); ?></font></span>
                                <span style="display:block; margin-top:10px;">工作经验:<?php echo e($value['experience']); ?></span>
                                <span style="display:block;">转正薪资:<?php echo e($value['money']); ?></span>
                                <span style="display:block;">学历要求:<?php echo e($value['education']); ?></span>
                             
                
                            <div class="tags">
                                <span><?php echo e($value['position_name']); ?></span>
                                <span><?php echo e($value['experience']); ?></span>
                                <span><?php echo e($value['money']); ?></span>
                            </div>
                            <div style=" margin-top:60px;">
                                <span style="margin-left:60px;">猛戳查看详情</span>
                                <img src="images/手指.jpg" alt="←-----" width="25px;" height="25px;">
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
                </ul>