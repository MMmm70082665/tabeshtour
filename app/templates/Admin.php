<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fa" lang="fa"  dir="rtl">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<base href="<?php echo $ro->getBaseHref(); ?>" />
		<meta name="ROBOTS" content="noindex,nofollow"  />
		<title><?php if(isset($t['_title'])) echo htmlspecialchars($t['_title']) . ' - '; echo AgaviConfig::get('core.app_name'); ?></title>
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
