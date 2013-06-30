<div id="content">
<div class="breadcrumb">
<span class="active">افزودن یک عضو جدید</span>
</div>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: پر کردن فیلد های ستاره دار الزامی است ::.
</div>
<div class="tab_description">
.:: در این بخش شما میتوانید یک شرکت عضو جدید ایجاد کنید ::.
</div>
<div class="tab_description">
.:: در صورت ایجاد مطلب شما به صفحه اصلی بخش مدیریت هدایت میشوید در غیر اینصورت به همین صفحه باز میگردید ::. 
</div>

</div>
<?php foreach ($t['member'] as $member):?>
<form method="post" action="<?php echo $ro->gen('admin.member.edit.index',array('id' => $member['Id']));?>">
<div class="border_wrapper">
<div class="title">افزودن یک شرکت جدید</div>
<table cellspacing="0" class="general form_container ">
	<tbody>
		<tr class="alt_row">
			<td style="" class="first">
				<label for="office">نام شرکت:  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $member['Office'];?>" type="text" id="office" class="text_input2" name="office">
					</div>
			</td>
		</tr>
			<tr class="alt_row">
			<td style="" class="first">
				<label for="phone">تلفن :  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $member['Phone'];?>" type="text" id="phone" class="text_input2" name="phone">
					</div>
			</td>
		</tr>
			<tr class="alt_row">
			<td style="" class="first">
				<label for="fax">فکس : </label>
					<div class="form_row">
						<input value="<?php echo $member['Fax'];?>" type="text" id="fax" class="text_input2" name="fax">
					</div>
			</td>
		</tr>
		<tr class="alt_row">
			<td style="" class="first">
				<label for="website">وبسایت: </label>
					<div class="form_row">
						<input value="<?php echo $member['Website'];?>" type="text" id="website" class="text_input2" name="website">
					</div>
			</td>
		</tr>
				<tr>
			<td style="" class="first">
			<label for="address">آدرس:<em>*</em></label>
				<div class="form_row">
				<textarea cols="45" rows="5"  id="address" name="address" ><?php echo $member['Address'];?></textarea>
				</div>
				<label for="desc">توضیحات :</label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="desc" name="desc" ><?php echo $member['Desc'];?></textarea>
				</div>
			</td>
		</tr>
								<tr class="alt_row">
			<td style="" class="first">
			<label for="publish">وضعیت انتشار: <em>*</em></label>
				<select name="publish">
				<option value="1">اکنون فعال شود</option>
				<option value="0">اکنون فعال نشود</option>
				</select>
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