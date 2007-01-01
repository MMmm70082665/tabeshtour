<div id="content">
<div class="breadcrumb">
<span class="active">نظرات تایید نشده</span>
<?php if (count($t['comment']) == 0 ): ?>
<?php echo ".:: هیچ دیدگاهی موجود نیست ::."?>
</div>
<?php else :?>
           <div id="inner">
          
<div class="border_wrapper">
	<?php foreach ($t['comment'] as $cm):?>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="20%" style="" class="first"> شماره  : <?php echo $cm['Id'];?> </th>
			<th width="20%" style="" class="align_center">تاریخ : <?php echo $cm['Date'];?></th>
		
		</tr>
	</thead>
	<tbody>
		<tr class="first">
			<td colspan="5" class="first" style="font-family:BKoodak">
			<span>نام :</span> <?php echo $cm['Name'];?> <br>
			<span>پست الکترونیک :</span> <?php if ($cm['Email'] == null) echo '-';?><?php echo $cm['Email'];?><br>
			<?php $tour_info = $t['tour'];?>
			<span>تور مورد نظر :</span><a target="_blank" href="">شماره پکیج : <?php  echo $tour_info['PackageCode'] ;?></a><br>
			<span>دیدگاه :</span> <?php echo $cm['Desc'];?> <br><p></p>
			</td>
		</tr>
	</tbody>
</table>
<div class="form_button_wrapper">
<a href="<?php echo $ro->gen('admin.comment.ellow.yes',array('id' => $cm['Id']));?>" ><input type="submit" class="submit_button" value="تایید نظر"></a>
<a href="<?php echo $ro->gen('admin.comment.answer.add',array('id' => $cm['Id']));?>"><input type="submit" class="submit_button" value="پاسخ"></a>  
<a href="<?php echo $ro->gen('admin.comment.delete.index',array('id' => $cm['Id']));?>"><input type="submit" class="submit_button" value="حذف نظر"></a> 
</div>
<?php endforeach;?>
</div>
<?php endif;?>
</div>
</div>