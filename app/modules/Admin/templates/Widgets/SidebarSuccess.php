<div id="page">
	<div id="left_menu">
<div class="left_menu_box">
<div class="title">تورها</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('admin.tour.create.add');?>">ایجاد تور</a></li>
<li class=""><a href="<?php echo $ro->gen('admin.tour.admin.index');?>">مدیریت تورها</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">سفرنامه</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('admin.masir.create.add');?>">ایجاد سفرنامه</a></li>
<li class=""><a href="<?php echo $ro->gen('admin.masir.admin.index');?>">مدیریت سفرنامه ها</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">شرکت ها</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('admin.member.admin.index');?>">لیست شرکت ها</a></li>
<li class=""><a href="<?php echo $ro->gen('admin.member.create.add');?>">اضافه کردن شرکت جدید</a></li>
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
<li class=""><a href="<?php echo $ro->gen('admin.comment.admin.index');?>">مدیریت دیدگاه ها</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">اسلایدر</div>
<ul class="menu">
<li class=""><a href="">آپلود عکس</a></li>
<li class=""><a href="">مدیریت تصاویر</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">سایر</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('admin.user.create.add');?>">تغییر رمز عبور</a></li>
<li class=""><a href="<?php echo $ro->gen('logout');?>">خروج</a></li>
</ul>
</div>
</div>
</div>