<div id="content">
<div class="breadcrumb">
<span class="active">افزودن یک تور مسافرتی جدید</span>
</div>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: پر کردن فیلد های ستاره دار الزامی است ::.
</div>
<div class="tab_description">
.:: در این بخش شما میتوانید یک تور ایجاد کنید ::.
</div>
<div class="tab_description">
.:: در صورت ایجاد مطلب شما به صفحه اصلی بخش مدیریت هدایت میشوید در غیر اینصورت به همین صفحه باز میگردید ::. 
</div>

</div>
<form method="post" action="<?php echo $ro->gen('admin.tour.create.add');?>">
<div class="border_wrapper">
<div class="title">افزودن یک تور مسافرتی جدید</div>
<table cellspacing="0" class="general form_container ">
	<tbody>
		<tr class="alt_row">
			<td style="" class="first">
				<label for="tour">تور:  <em>*</em></label>
					<div class="form_row">
						<input type="text" id="tour" class="text_input2" name="tour">
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
	</div>
		</div>
		<br style="clear: both;">
<br style="clear: both;">