<div id="content">
<div class="breadcrumb">
<span class="active">اسلایدر</span>
</div>
<?php if (count($t['slider']) == 0 ):?>
<?php echo ".:: هیچ مطلبی موجود نیست ::."?>
<?php else :?>
<div id="inner">
<div class="border_wrapper">
	<div class="title">اسلایدر</div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="5%" class="align_center" style="">شماره</th>
			<th width="10%" class="align_center" style="">شناسه عکس</th>
			<th width="40%" class="align_center" style="">محتوا</th>
			<th width="10%" class="align_center" style="">موقعیت افقی</th>
			<th width="10%" class="align_center" style="">موقعیت عمودی</th>
			<th width="15%" class="align_center last" style="" colspan="2">گزینه ها</th>
		</tr>
	</thead>
            <tbody>
              <?php foreach ($t['slider'] as $post): ?>
			<tr class="first">
			<td class="align_center last alt_col" style=""><?php echo $post['Id']?></td>
            <td class="align_center alt_col" style=""><?php echo $post['Shenase'];   ?></td>
            <td class="align_center alt_col" style="" ><?php echo $post['Content'];   ?></td>
			<td class="align_center alt_col" style=""><?php echo $post['Xpos']?></td>
			<td class="align_center alt_col" style=""><?php echo $post['Ypos']?></td>
			<td class="align_center" style="">
			<a href="<?php echo $ro->gen('admin.slider.edit.index',array('id' => $post['Id']));?>">ویرایش</a>
			</td>
			<td class="align_center last alt_col" style="">
			<a href="<?php echo $ro->gen('admin.slider.delete.index',array('id' => $post['Id']));?>">حذف</a>
			</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
</table>
</div>
            		<?php endif;?>
		</div>
		</div>