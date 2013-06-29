<div id="menu">
<ul>
<li><a href="<?php echo $ro->gen('admin.index');?>">صفحه اصلی</a></li>
<li><a href="<?php echo $ro->gen('admin.post.publish.admin');?>">خبر منتشر نشده<span style="color: #FC0;">[<?php echo $t['non_publisher'];?>]</span> </a></li>
<li><a href="<?php echo $ro->gen('admin.communication.contact.new');?>">آخرین تماس ها  <span style="color: #FC0;">[<?php echo $t['new_tiket']?>]</span></a></li>
<li><a href="">نظرسنجی بررسی نشده  <span style="color: #FC0;">[]</span> </a></li>
<li><a href="">اعضای غیر فعال  <span style="color: #FC0;">[]</span> </a></li>
<li><a href="<?php echo $ro->gen('index');?>" target="_blank">مشاهده سایت</a></li>
</ul>
</div>