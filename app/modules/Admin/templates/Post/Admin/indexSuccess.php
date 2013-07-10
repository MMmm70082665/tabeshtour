<div id="content">
<div class="breadcrumb">
<span class="active">مدیریت مطالب</span>
</div>
<?php if (count($t['post']) == 0 ):?>
<?php echo ".:: هیچ مطلبی موجود نیست ::."?>
<?php else :?>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: در این بخش شما میتوانید مطالب را مدیریت کنید ::.
</div>
<div class="tab_description">
.:: در صورت کلیک به روی یک مطلب منتشر نشده میتوانید آن را منتشر کنید ::.
</div>
</div>
<div class="border_wrapper">
	<div class="title">مدیریت مطالب</div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="5%" class="align_center" style="">شماره</th>
			<th width="40%" class="align_center" style="">عنوان</th>
			<th width="10%" class="align_center" style="">وضعیت انتشار</th>
			<th width="15%" class="align_center last" style="" colspan="2">گزینه ها</th>
		</tr>
	</thead>
            <tbody>
              <?php foreach ($t['post'] as $post): ?>
			<tr class="first">
			<td class="align_center last alt_col" style=""><?php echo $post['Id']?></td>
            <td class="first" style=""><?php echo $post['Subject'];   ?></td>
			<td class="align_center alt_col" style="">
			<a href="<?php echo $ro->gen('admin.post.publish.pub',array('id' => $post['Id']));?>">منتشر شده</a></td>
			<td class="align_center" style="">
			<a href="<?php echo $ro->gen('admin.post.edit.index',array('id' => $post['Id']));?>">ویرایش</a>
			</td>
			<td class="align_center last alt_col" style="">
			<a href="<?php echo $ro->gen('admin.post.delete.index',array('id' => $post['Id']));?>">حذف</a>
			</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
</table>
</div>
<div class="pagination clearfix">
			<?php foreach ($t['page'] as $page):?>	
                       <a href="<?php echo $ro->gen('admin.post.admin.index',array('id' => $page)); ?>"><?php echo $page ;?></a>
            		            <?php endforeach;?>
            		</div>
            		<?php endif;?>
		</div>
		</div>