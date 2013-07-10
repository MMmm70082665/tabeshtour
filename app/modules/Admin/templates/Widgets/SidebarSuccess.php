<div id="page">
	<div id="left_menu">
<div class="left_menu_box">
<div class="title">مدیریت تورها</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('admin.masir.create.add');?>">ایجاد مسیر</a></li>
<li class=""><a href="<?php echo $ro->gen('admin.masir.admin.index');?>">مدیریت مسیرها</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">مدیریت مسیر ها</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('admin.masir.create.add');?>">ایجاد مسیر</a></li>
<li class=""><a href="<?php echo $ro->gen('admin.masir.admin.index');?>">مدیریت مسیرها</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">خبر ها </div>
<ul class="menu">
<li><a href="<?php echo $ro->gen('admin.post.create.add');?>">ایجاد خبر</a></li>
<li class=""><a href="<?php echo $ro->gen('admin.post.admin.index',array('id' => 1));?>">مدیریت خبر ها</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">تماس ها</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('admin.communication.contact.admin');?>">مدیریت تماس ها</a></li>
<li class=""><a href="<?php echo $ro->gen('admin.communication.contact.admin');?>">مدیریت دیدگاه ها</a></li>
</ul>
</div>
<!-- 
<div class="left_menu_box">
<div class="title">شرکت های طرف قرار داد</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('admin.member.admin.index');?>">لیست شرکت ها</a></li>
<li class=""><a href="<?php echo $ro->gen('admin.member.create.add');?>">اضافه کردن شرکت جدید</a></li>
</ul>
</div>
-->
<div class="left_menu_box">
<div class="title">سایر</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('admin.user.create.add');?>">تغییر رمز عبور</a></li>
<li class=""><a href="<?php echo $ro->gen('logout');?>">خروج</a></li>
</ul>
</div>
</div>
</div>