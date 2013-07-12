<div id="content">
<div class="breadcrumb">
<span class="active">نظرات تایید نشده</span>
</div>
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
			<span>آدرس وبسایت :</span> <?php if ($cm['Website'] == null) echo 'ندارد';?> <a href="<?php echo $cm['Website'];?>"><?php echo $cm['Website'];?></a><br>
			<span>پست الکترونیک :</span> <?php if ($cm['Email'] == null) echo 'ندارد';?><?php echo $cm['Email'];?><br>
			<?php $mat = MatterQuery::create()->useCommentQuery()->filterByMatterId($cm['MatterId'])->endUse()->find(); ?>
			<?php foreach ($mat as $m)?>
			<?php $th = ThirdCategoryQuery::create()->useMatterQuery()->filterByThirdCategoryId($m->getThirdCategoryId())->endUse()->find();?>
			<?php foreach ($th as $h)?>
			<span>مطلب مورد نظر  :</span><a target="_blank" href="<?php echo $ro->gen('download.continue',array('id' => $m->getId()));?>"><?php echo $m->getMainSubject();?></a>  | <span>دسته :</span> <?php echo  $h->getPersianName();?> | <span>شماره مطلب :</span> <?php echo $cm['MatterId']?><br>
			<span>دیدگاه :</span> <?php echo $cm['Desc'];?> <br><p></p>
			</td>
		</tr>
	</tbody>
</table>
<div class="form_button_wrapper">
<a href="<?php echo $ro->gen('news.comment.ellow.yes',array('id' => $cm['Id']));?>" ><input type="submit" class="submit_button" value="تایید نظر"></a>
<a href="<?php echo $ro->gen('news.comment.answer.add',array('id' => $cm['Id']));?>"><input type="submit" class="submit_button" value="پاسخ"></a>  
<a href="<?php echo $ro->gen('news.comment.delete.del',array('id' => $cm['Id']));?>"><input type="submit" class="submit_button" value="حذف نظر"></a> 
</div>
<?php endforeach;?>
</div>
</div>
</div>