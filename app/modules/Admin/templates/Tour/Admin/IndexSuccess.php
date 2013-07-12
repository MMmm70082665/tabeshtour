<div id="content">
<div class="breadcrumb">
<span class="active">مدیریت تورها</span>
<?php if (count($t['city']) == 0):?>
<?php echo '.:: هیچ توری باز نیست ::.' ?>
</div>
<?php else :?>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: در این بخش شما میتوانید تورها را مدیریت کنید ::.
</div>
<div class="tab_description">
.:: در صورت کلیک به روی یک تور باز میتوانید آن را بسته کنید ::.
</div>
</div>
<?php foreach ($t['city'] as $city):?>
<div class="border_wrapper">
	<div class="title">مدیریت تور <?php echo $city['Country'];?></div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="5%" style="" class=" first">شماره</th>
			<th width="40%" style="" class=" first">عنوان</th>
			<th width="10%" style=""  class="align_center">وضعیت</th>
			<th  width="20%" colspan="2" style="" class="align_center last">گزینه ها</th>
		</tr>
	</thead>
	<tbody>
		<tr class="first">
			<td  style="" class="align_center last alt_col"></td>
			<td style="" class="first"></td>
			<td style="" class="align_center alt_col">
			<a href=""></a></td>
			<td style="" class="align_center alt_col"></td>
			<td  style="" class="align_center">
			<a href="">ویرایش</a>
			</td>
			<td  style="" class="align_center last alt_col">
			<a href="">حذف</a>
			</td>
		</tr>
	</tbody>
</table>
</div>	
<?php endforeach;?>
<?php endif;?>
		</div>
		</div>
		<br style="clear: both;">
<br style="clear: both;">