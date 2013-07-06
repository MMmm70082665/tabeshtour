<div id="content">
<div class="breadcrumb">
<span class="active">مدیریت مطالب</span>
</div>
<?php if (count($t['tour']) == 0 ):?>
<?php echo ".:: هیچ مطلبی موجود نیست ::."?>
<?php else :?>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: در این بخش شما میتوانید تور ها را مدیریت کنید ::.
</div>
<div class="tab_description">
.:: در صورت کلیک به روی یک مطلب منتشر نشده میتوانید آن را منتشر کنید ::.
</div>
</div>
<div class="border_wrapper">
	<div class="title">مدیریت تورها</div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="1%" class="align_center" style="">شماره</th>
			<th width="10%" class="align_center" style="">عنوان</th>
			<th width="5%" class="align_center" style="">تعداد مسیر ها</th>
			<th width="10%" class="align_center" style="">وضعیت انتشار</th>
			<th width="15%" class="align_center last" style="" colspan="2">گزینه ها</th>
		</tr>
	</thead>
            <tbody>
              <?php foreach ($t['tour'] as $post): ?>
			<tr class="first">
			<td class="align_center last alt_col" style=""><?php echo $post['Id']?></td>
            <td class="align_center alt_col" style=""><?php echo $post['Name'];   ?></td>
            <td class="align_center alt_col" style=""><a href=""><?php echo $t['city_count'];?></a></td>
			<td class="align_center alt_col" style="">
			<a href="<?php echo $ro->gen('admin.tour.publish.pub',array('id' => $post['Id']));?>">فعال</a></td>
			<td class="align_center last alt_col" style="">
			<a href="<?php echo $ro->gen('admin.tour.delete.index',array('id' => $post['Id']));?>">حذف</a>
			</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
</table>
</div>
            		<?php endif;?>
		</div>
		</div>