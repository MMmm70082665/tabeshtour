<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fa"  dir="rtl">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<base href="<?php echo $ro->getBaseHref(); ?>" />
		<meta name="ROBOTS" content="noindex,nofollow"  />
		<title>Tabesh Tour - Administrator</title>
		<link type="text/css" href="admin/css/style.css" rel="stylesheet" />
	</head>
	<body>
		<div id="container">
	    	<?php echo $slots['header'] ; ?>
	    		<div id="page">
					<?php echo $slots['sidebar'];?>
					<?php echo $inner; ?>
				</div>
			<?php echo $slots['footer']; ?>
		</div>
	</body>
</html>
