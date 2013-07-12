<div id="content">
<div class="breadcrumb">
<span class="active">افزودن یک تور جدید</span>
</div>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: پر کردن فیلد های ستاره دار الزامی است ::.
</div>
<div class="tab_description">
.:: در این بخش شما میتوانید یک تور جدید ایجاد کنید ::.
</div>
<div class="tab_description">
.:: در صورت ایجاد تور شما به صفحه اصلی بخش مدیریت هدایت میشوید در غیر اینصورت به همین صفحه باز میگردید ::. 
</div>

</div>
<form method="post" action="<?php echo $ro->gen('admin.tour.create.add');?>">
<div class="border_wrapper">
<div class="title">افزودن یک تور جدید</div>
<table cellspacing="0" class="general form_container ">
	<tbody>
		<tr class="alt_row">
			<td style="" class="first">
				<label for="package_code">شماره پکیج <em>*</em>:  </label>
				<div class="form_row">
						<input type="text" id="package_code" class="text_input2l" name="package_code">
					</div>
					<label for="cost">هزینه <em>*</em>:  </label>
					<div class="form_row">
						<input type="text" id="cost" class="text_input2l" name="cost">
						</div>
						</td>
		</tr>
					<tr class="alt_row">
			<td style="" class="first">
					<label for="begin_date">تاریخ شروع <em>*</em>:  </label>
					<div class="form_row">
						<input type="text" id="begin_date" class="text_input2r" name="begin_date">
						</div>
					<label for="end_date">تاریخ پایان <em>*</em>:  </label>
					<div class="form_row">
						<input type="text" id="end_date" class="text_input2r" name="end_date">
						</div>
									<label for="mabda">مبدا <em>*</em>:  </label>
				<div class="form_row">
						<input type="text" id="mabda" class="text_input2l" name="mabda">
					</div>
						</td>
						</tr>
		
				<tr class="alt_row">
			<td style="" class="first">
			<label for="maghsad">مقصد <em>*</em>: </label>
				<select name="maghsad">
				<option selected="selected">انتخاب</option>
				<?php foreach ($t['city'] as $city):?>
				<option value="<?php echo $city['Id'];?>"><?php echo $city['Country'].'-'.$city['Name'];?></option>
				<?php endforeach;?>
				</select>
				<label for="kind">تور <em>*</em>: </label>
				<select name="kind">
				<option value="true">داخلی</option>
				<option value="false">خارجی</option>
				</select>
				<label for="publisher">نوع <em>*</em>: </label>
				<select name="publisher">
				<option value="true">تفریحی</option>
				<option value="false">زیارتی</option>
				</select>
				<label for="type">سفر <em>*</em>: </label>
				<select name="type">
				<option value="true">هوایی</option>
				<option value="false">زمینی</option>
				</select>
							<label for="status">وضعیت <em>*</em>: </label>
				<select name="status">
				<option value="true">باز</option>
				<option value="false">بسته</option>
				</select>
			</td>
		</tr>
				<tr>
			<td style="" class="first">
			<label for="madarek">مدارک:</label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="madarek" name="madarek" ></textarea>
				</div>
				<label for="khadamat">خدمات:</label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="khadamat" name="khadamat" ></textarea>
				</div>
					<label for="desc">توضیحات:</label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="desc" name="desc" ></textarea>
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
	</div>
		</div>
		<br style="clear: both;">
<br style="clear: both;">
<script type="text/javascript" src="js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script><script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",

        // Example content CSS (should be your site CSS)
        content_css : "css/example.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
      </script>