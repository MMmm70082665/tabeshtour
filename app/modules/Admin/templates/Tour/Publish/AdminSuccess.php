<div id="content">
<div class="breadcrumb">
<span class="active">مدیریت تورهای بسته شده</span>
<?php if (count($t['tour']) == 0):?>
<?php echo '.:: هیچ توری بسته نیست ::.' ?>
</div>
<?php else :?>
<div id="inner">
<div class="border_wrapper">
	<div class="title">مدیریت تور</div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
		<th width="5%" style="" class="align_center">شماره پکیج</th>
			<th width="5%" style="" class="align_center"><a href="<?php echo $ro->gen('admin.tour.admin.index',array('order' => 'Mabda'));?>">مبدا </a></th>
			<th width="5%" style="" class="align_center">مقصد</th>
			<th width="5%" style="" class="align_center">تور</th>
			<th width="5%" style="" class="align_center">نوع</th>
			<th width="5%" style="" class="align_center">سفر</th>
			<th width="5%" style=""  class="align_center">وضعیت</th>
			<th width="5%" style=""  class="align_center">تاریخ شروع</th>
			<th width="5%" style=""  class="align_center">تاریخ پایان</th>
			<th  width="8%" colspan="2" style="" class="align_center last">گزینه ها</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($t['tour'] as $tour):?>
		<tr class="first">
			<td  style="" class="align_center last alt_col"><?php echo $tour['PackageCode'] ;?></td>
			<td  style="" class="align_center last alt_col"><?php echo $tour['Mabda'] ;?></td>
			<td  style="" class="align_center last alt_col"><?php $city = CityQuery::create()->findPk($tour['CityId']);echo $city->getCity();?></td>
			<td  style="" class="align_center last alt_col"><?php if ($tour['Kind'] == 'iner') echo 'داخلی'; else 'خارجی';?></td>
			<td  style="" class="align_center last alt_col"><?php if ($tour['Type'] == 'ziyarati') echo 'زیارتی'; else echo 'تفریحی';?></td>
			<td  style="" class="align_center last alt_col"><?php if ($tour['Travel'] == 'sky') echo 'هوایی' ; else 'زمینی' ;?></td>
			<td  style="" class="align_center last alt_col"><a href="<?php echo $ro->gen('admin.tour.publish.pub',array('id' => $tour['Id'])); ?>">بسته </a></td>
			<td  style="" class="align_center last alt_col"><?php echo $tour['BeginDate'];?></td>
			<td  style="" class="align_center last alt_col"><?php echo $tour['EndDate'] ;?></td>
			<td  style="" class="align_center"><a href="<?php echo $ro->gen('admin.tour.edit.index',array('id' => $tour['Id']));?>">ویرایش</a></td>
			<td  style="" class="align_center last alt_col"><a href="<?php echo $ro->gen('admin.tour.delete.index',array('id'=> $tour['Id']));?>">حذف</a></td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
</div>	
<?php endif;?>
		</div>
		</div>
		<br style="clear: both;">
<br style="clear: both;">