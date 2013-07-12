<div id="content">
<div class="breadcrumb">
<span class="active">سفرنامه ها</span>
</div>
<?php if (count($t['masir']) == 0 ):?>
<?php echo ".:: هیچ مطلبی موجود نیست ::."?>
<?php else :?>
<div id="inner">
<div class="border_wrapper">
	<div class="title">سفرنامه ها</div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="10%" class="align_center" style="">کشور</th>
			<th width="15%" class="align_center" style="">شهر</th>
			<th width="15%" class="align_center last" style="" colspan="2">گزینه ها</th>
		</tr>
	</thead>
            <tbody>
              <?php foreach ($t['masir'] as $post): ?>
			<tr class="first">
            <td class="align_center alt_col" style=""><?php echo $post['Country'];   ?></td>
            <td class="align_center alt_col" style=""><?php echo  $post['City']?></td>
			<td class="align_center" style="">
			<a href="<?php echo $ro->gen('admin.masir.edit.index',array('id' => $post['Id']));?>">ویرایش</a>
			</td>
			<td class="align_center last alt_col" style="">
			<a href="<?php echo $ro->gen('admin.masir.delete.index',array('id' => $post['Id']));?>">حذف</a>
			</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
</table>
</div>
            		<?php endif;?>
		</div>
		</div>