<div id="content">
<div class="breadcrumb">
<span class="active">سفرنامه</span>
</div>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: پر کردن فیلد های ستاره دار الزامی است ::.
</div>
<div class="tab_description">
.:: در این بخش شما میتوانید یک سفرنامه جدید ایجاد کنید ::.
</div>
<div class="tab_description">
.:: در صورت ایجاد سفرنامه شما به صفحه اصلی بخش مدیریت هدایت میشوید در غیر اینصورت به همین صفحه باز میگردید ::. 
</div>
</div>
<form method="post" action="<?php echo $ro->gen('admin.masir.create.add');?>">
<div class="border_wrapper">
<div class="title">افزودن یک سفرنامه  جدید</div>
<table cellspacing="0" class="general form_container ">
	<tbody>
		<tr class="alt_row">
			<td style="" class="first">
			<label for="country">نام کشور:  <em>*</em></label>
					<div class="form_row">
						<input type="text" id="country" class="text_input2r" name="country">
					</div>
				<label for="city">نام شهر:  <em>*</em></label>
					<div class="form_row">
						<input type="text" id="city" class="text_input2r" name="city">
					</div>
			</td>
		</tr>
				<tr>
			<td style="" class="first">
			<label for="desc">توضیح:<em></em></label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="desc" name="desc" ></textarea>
				</div>
				<label for="useful_info">اطلاعات مفید:</label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="useful_info" name="useful_info" ></textarea>
				</div>
			</td>
		</tr>
		<tr>
			<td style="" class="first">
			<label for="hotel">هتل ها:</label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="hotel" name="hotel" ></textarea>
				</div>
			</td>
		</tr>
			<tr>
			<td style="" class="first">
			<label for="buy_center">مراکز خرید:</label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="buy_center" name="buy_center" ></textarea>
				</div>
			</td>
		</tr>	<tr>
			<td style="" class="first">
			<label for="restoran">رستوران ها:</label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="restoran" name="restoran" ></textarea>
				</div>
			</td>
		</tr>	<tr>
			<td style="" class="first">
			<label for="place">جاذبه ها:</label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="place" name="place" ></textarea>
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