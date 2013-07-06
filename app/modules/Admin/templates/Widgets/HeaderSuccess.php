<div id="menu">
<ul>
<li><a href="<?php echo $ro->gen('admin.index');?>">صفحه اصلی</a></li>
<li><a href="<?php echo $ro->gen('admin.tour.publish.admin');?>">تور های لغو شده  <span style="color: #FC0;">[<?php echo $t['non_tour']; ?>]</span> </a></li>
<li><a href="<?php echo $ro->gen('admin.masir.publish.pub');?>">مسیرهای لغو شده <span style="color: #FC0;">[<?php echo $t['non_city']; ?>]</span> </a></li>
<li><a href="<?php echo $ro->gen('admin.member.notactive.index')?>">شرکت های غیر فعال  <span style="color: #FC0;">[<?php echo $t['non_member'];?>]</span> </a></li>
<li><a href="<?php echo $ro->gen('admin.post.publish.admin');?>">خبر منتشر نشده <span style="color: #FC0;">[<?php echo $t['non_publisher'];?>]</span> </a></li>
<li><a href="<?php echo $ro->gen('admin.communication.contact.new');?>">آخرین تماس ها  <span style="color: #FC0;">[<?php echo $t['new_tiket']?>]</span></a></li>
</ul>
</div>