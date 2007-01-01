 <div id="content">
           <div id="inner">	
<div class="border_wrapper">
	<div class="title">میز کار مدیر&zwnj;کل</div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="" colspan="2" style="" class=" first">آمار کلی</th>
			<th width="" colspan="2" style="" class=" last">آمار ارسال ها</th>
		</tr>
	</thead>
	<tbody>
		<tr class="first">
			<td width="25%" style="" class="first"><strong>تعداد تورها</strong></td>
			<td width="25%" style="" class="alt_col"><a href="<?php echo $ro->gen('admin.tour.admin.index');?>"><?php echo count(TourQuery::create()->find());?></a></td>
			<td width="25%" style="" class=""><strong>خبرها</strong></td>
			<td width="25%" style="" class="last alt_col">
			<a href="<?php echo $ro->gen('admin.post.admin.index',array('id' => 1));?>"><strong><?php echo count(NewsQuery::create()->filterByPublish(true)->find());?></strong> منتشر شده</a><br>
			<a href="<?php echo $ro->gen('admin.post.publish.admin');?>"> <strong><?php echo count(NewsQuery::create()->filterByPublish(false)->find());?></strong> منتشر نشده<br></a>
			<a href="<?php echo $ro->gen('admin.post.admin.index',array('id' => 1));?>"><strong><?php echo count(NewsQuery::create()->find());?></strong> کل خبرها</a></td>
		</tr>
		<tr class="alt_row">
			<td width="25%" style="" class="first"><strong> سفرنامه ها</strong></td>
			<td width="25%" style="" class="alt_col"><a href="<?php echo $ro->gen('admin.masir.admin.index');?>"><?php echo count(CityQuery::create()->find());?></a></td>
			<td width="25%" style="" class=""><strong>نظرات</strong></td>
			<td width="25%" style="" class="last alt_col">
			<a href="<?php echo $ro->gen('admin.comment.admin.index');?>"><strong> <?php echo count(TourCommentQuery::create()->filterByPublish(true)->find());?> </strong> تایید شده<br></a>
			<a href="<?php echo $ro->gen('admin.comment.publish.index');?>"><strong> <?php echo count(TourCommentQuery::create()->filterByPublish(false)->find());?> </strong> تأیید نشده   &zwnj;<br></a>
			<a href="<?php echo $ro->gen('admin.comment.admin.index');?>"><strong> <?php echo count(TourCommentQuery::create()->find());?></strong> کل نظرات</a>
			</td>
		</tr>
		<tr>
			<td width="25%" style="" class="first"><strong>شرکت های عضو</strong></td>
			<td width="25%" style="" class="alt_col"><a href="<?php echo $ro->gen('admin.member.admin.index');?>"><?php echo count(PartnersQuery::create()->find());?></a></td>
			<td width="25%" style="" class=""><strong>تماس ها</strong></td>
			<td width="25%" style="" class="last alt_col">
			<a href="<?php echo $ro->gen('admin.communication.contact.new');?>"><strong><?php echo count(TiketQuery::create()->filterByPublish(false)->find());?></strong> بررسی نشده<br></a>
			<a href="<?php echo $ro->gen('admin.communication.contact.admin');?>"><strong><?php echo count(TiketQuery::create()->filterByPublish(true)->find());?></strong> بررسی شده<br></a>
			<a href="<?php echo $ro->gen('admin.communication.contact.admin');?>"><strong><?php echo count(TiketQuery::create()->find());?></strong> کل تماس ها<br></a>
			</td>
		</tr>
		</tbody>
</table>
</div>
</div>
		</div>
