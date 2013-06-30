<div id="content">
<div class="breadcrumb">
<span class="active">مدیریت تماس ها</span>
</div>
           <div id="inner">

          
<div class="border_wrapper">
<?php rsort($t['tiket']);?>
	<?php foreach ($t['tiket'] as $tiket):?>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="25%" style="" class=" first">شماره : <?php echo $tiket['Id'];?> </th>
			<th width="25%" style="" class="align_center">تاریخ : <?php echo $tiket['Date'];?></th>
			<th width="25%" style="" class="align_center">اهمیت : <?php if ($tiket['Order'] == 1) echo 'ضروری'; else echo 'غیر ضروری'; ?> </th>
		</tr>
	</thead>
	<tbody>
		<tr class="first">
			<td colspan="5" style="font-family:BKoodak;font-size:13px" class="first">
			<span>نام :</span> <?php echo $tiket['Name'];?> <br>
			<span>پست الکترونیک :</span> <?php echo $tiket['Email'];?><br>
			<span>موضوع :</span> <?php echo $tiket['Subject'];?><br>
			<span>توضیحات :</span> <?php echo $tiket['Desc'];?> <br><p></p>
			</td>
		</tr>
	</tbody>
</table>
<div class="form_button_wrapper">
<a href="<?php echo $ro->gen('admin.communication.contact.delete',array('id' => $tiket['Id']));?>" ><input type="submit" class="submit_button" value="حذف"></a>
</div>
<?php endforeach;?>
</div>
</div>
</div>