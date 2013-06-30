<div id="page">
	<div id="left_menu">
<div class="left_menu_box">
<div class="title">مطالب </div>
<ul class="menu">
<li><a href="<?php echo $ro->gen('admin.post.create.add');?>">ایجاد خبر</a></li>
<li class=""><a href="<?php echo $ro->gen('admin.post.admin.index',array('id' => 1));?>">مدیریت خبر ها</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">مدیریت تورها و مسیرها</div>
<ul class="menu">
<li class=""><a href="/news/menu/create/add">ایجاد تور</a></li>
<li class=""><a href="/news/two-menu/create/add">ایجاد مسیر</a></li>
<li class=""><a href="/news/menu/admin/index">مدیریت تورها</a></li>
<li class=""><a href="/news/two-menu/admin/index">مدیریت مسیرها</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">شرکت های عضو</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('admin.member.admin.index');?>">لیست شرکت ها</a></li>
<li class=""><a href="<?php echo $ro->gen('admin.member.create.add');?>">اضافه کردن شرکت جدید</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">تماس ها</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('admin.communication.contact.admin');?>">مدیریت تماس ها</a></li>
<li class=""><a href="/news/comment/main-admin/page?id=1">مدیریت نظر سنجی</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">امنیت</div>
<ul class="menu">
<li class=""><a href="">ایجاد کاربر جدید</a></li>
<li class=""><a href="">ویرایش پروفایل</a></li>
<li class=""><a target="_blank" href="<?php echo $ro->gen('index');?>">مشاهده سایت</a></li>
<li class=""><a href="<?php echo $ro->gen('logout');?>">خروج</a></li>
</ul>
</div>
</div>
			</div>