<div id="content">
<div class="breadcrumb">
<span class="active">ویرایش پروفایل مدیر</span>
</div>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: در این بخش شما میتوانید پروفایل مدیر را ویرایش کنید ::.
</div>
</div>
<?php foreach ($t['user'] as $user):?>
<form method="post" action="<?php echo $ro->gen('admin.user.create.add');?>">
<div class="border_wrapper">
<div class="title">ویرایش پروفایل مدیر</div>
<table cellspacing="0" class="general form_container ">
	<tbody>
			<tr class="alt_row">
			<td style="" class="first">
				<label for="username">نام کاربری :<em>*</em> </label>
					<div class="form_row">
						<input value="<?php echo $user['Username'];?>" type="text" id="username" class="text_input2l" name="username">
					</div>
			</td>
		</tr>
		
		<tr class="alt_row">
			<td style="" class="first">
				<label for="password">کلمه عبور:<em>*</em>  </label>
					<div class="form_row">
						<input value="<?php echo $user['Password'];?>" type="text" id="password" class="text_input2l" name="password">
					</div>
			</td>
		</tr>

	</tbody>
</table>
<div class="form_button_wrapper">
<input type="submit" class="submit_button" value="ارسال"> 
</div>
</div>
</form>
<?php endforeach;?>
	</div>
		</div>
		<br style="clear: both;">
<br style="clear: both;">