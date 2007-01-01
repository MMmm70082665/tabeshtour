<div id="content">
<div class="breadcrumb">
<span class="active">اسلایدر</span>
</div>
<div id="inner">
<?php foreach ($t['slider'] as $post) :?>
<form method="post" action="<?php echo $ro->gen('admin.slider.edit.index',array('id' => $post['Id']));?>">
<div class="border_wrapper">
<div class="title">اسلایدر</div>
<table cellspacing="0" class="general form_container ">
	<tbody>
		<tr class="alt_row">
			<td style="" class="first">
				<label for="shenase">شناسه عکس:  <em>*</em>(شناسه عکس را از پوشه slider/main_picture انتخاب کنید.)</label>
					<div class="form_row">
						<input value="<?php echo $post['Shenase'];?>" type="text" id="shenase" class="text_input2l" name="shenase">
					</div>
					<label for="content">متن یا عکس:  <em>*</em>(شناسه عکس را از پوشه slider/tumbnail انتخاب کنید.)</label>
					<div class="form_row">
						<input value="<?php echo $post['Content'];?>" type="text" id="mohtava" class="text_input2r" name="mohtava">
					</div>
					</td>
					</tr>
					<tr class="alt_row">
			<td style="" class="first">
						<label for="effect">افکت:  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $post['Effect'];?>" type="text" id="effect" class="text_input2l" name="effect">
					</div>
				<label for="xpos">موقعیت افقی:  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $post['Xpos'];?>" type="text" id="xpos" class="text_input2r" name="xpos">
					</div>
					<label for="ypos">موقعیت عمودی:  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $post['Ypos'];?>" type="text" id="ypos" class="text_input2r" name="ypos">
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