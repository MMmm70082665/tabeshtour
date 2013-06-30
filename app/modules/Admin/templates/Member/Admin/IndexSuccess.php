<div id="content">
<div class="breadcrumb">
<span class="active">مدیریت شرکت های طرف قرارداد</span>
</div>
<?php if (count($t['member']) == 0 ):?>
<?php echo ".:: هیچ مطلبی موجود نیست ::."?>
<?php else :?>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: در این بخش شما میتوانید شرکت های طرف قرار داد را مدیریت کنید ::.
</div>
<div class="tab_description">
.:: در صورت کلیک به روی یک مطلب منتشر نشده میتوانید آن را منتشر کنید ::.
</div>
</div>
<div class="border_wrapper">
	<div class="title">مدیریت اعضا</div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="2%" class="align_center" style="">شماره</th>
			<th width="20%" class="align_center" style="">نام شرکت</th>
			<th width="5%" class="align_center" style="">وضعیت</th>
			<th width="10%" class="align_center" style="">تلفن</th>
			<th width="10%" class="align_center" style="">فکس</th>
			<th width="14%" class="align_center" style="">وبسایت</th>
			<th width="8%" class="align_center last" style="" colspan="2">گزینه ها</th>
		</tr>
	</thead>
            <tbody>
              <?php foreach ($t['member'] as $member): ?>
			<tr class="first">
			<td class="align_center last alt_col" style=""><?php echo $member['Id']?></td>
            <td class="first" style=""><?php echo $member['Office']; ?></td>
			<td class="align_center alt_col" style="">
			<a href="<?php echo $ro->gen('admin.member.publish.pub',array('id' => $member['Id']));?>">فعال</a></td>
			<td class="align_center alt_col" style=""><?php echo $member['Phone']; ?></td>
			<td class="align_center alt_col" style=""><?php echo $member['Fax']; ?></td>
			<td class="align_center alt_col" style=""><a href="<?php echo $member['Website']; ?>"><?php echo $member['Website']; ?></a></td>
			<td class="align_center" style="">
			<a href="<?php echo $ro->gen('admin.member.edit.index',array('id' => $member['Id']));?>">ویرایش</a>
			</td>
			<td class="align_center last alt_col" style="">
			<a href="<?php echo $ro->gen('admin.member.delete.index',array('id' => $member['Id']));?>">حذف</a>
			</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
</table>
</div>
            		<?php endif;?>
		</div>
		</div>