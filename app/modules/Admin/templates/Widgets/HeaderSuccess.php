<div id="menu">
<ul>
<li><a href="<?php echo $ro->gen('admin.index');?>">صفحه اصلی</a></li>
<li><a href="<?php echo $ro->gen('admin.tour.publish.admin');?>">تورهای بسته شده <span style="color: #FC0;">[<?php echo $t['close_tour']; ?>]</span> </a></li>
<li><a href="<?php echo $ro->gen('admin.post.publish.admin');?>">خبرهای منتشر نشده <span style="color: #FC0;">[<?php echo $t['non_news'];?>]</span> </a></li>
<li><a href="<?php echo $ro->gen('admin.communication.contact.new');?>">آخرین تماس ها  <span style="color: #FC0;">[<?php echo $t['new_tiket']?>]</span></a></li>
<li><a href="<?php echo $ro->gen('admin.comment.publish.admin');?>">آخرین دیدگاها  <span style="color: #FC0;">[<?php echo $t['tour_comment']?>]</span></a></li>
<li><a target="_blank" href="<?php echo $ro->gen('index');?>">مشاهده سایت</a></li>
<li><a target="_blank" href="<?php echo $ro->gen('logout');?>">خروج</a></li>
</ul>
</div>