<?php

// This is a compiled Agavi configuration file
// Compiled from: C:/ws/tabeshtour/app/modules/Admin/cache/Widgets/Sidebar.xml
// Generated by: AgaviCachingConfigHandler
// Date: 2013-06-30T09:14:23+0000

$configs = array (
);
if(isset($configs[$index = $container->getRequestMethod()]) || isset($configs[$index = "*"])) {
	$isCacheable = true;
	$config = $configs[$index];
	if(is_array($config["views"])) {
		foreach($config["views"] as &$view) {
			if(!is_array($view)) {
				if($view === null) {
					$view = array(
						"module" => null,
						"name" => null
					);
				} else {
					$view = array(
						"module" => $moduleName,
						"name" => AgaviToolkit::evaluateModuleDirective(
							$moduleName,
							"agavi.view.name",
							array(
								"actionName" => $actionName,
								"viewName" => $view,
							)
						)
					);
				}
			}
		}
	}
}

?>