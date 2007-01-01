<?php

// This is a compiled Agavi configuration file
// Compiled from: C:/ws/tabeshtour/app/modules/Admin/config/module.xml
// Generated by: AgaviModuleConfigHandler
// Date: 2007-01-01T13:58:38+0000

$lcModuleName = strtolower($moduleName);
AgaviConfig::set(AgaviToolkit::expandVariables('modules.${moduleName}.enabled', array('moduleName' => $lcModuleName)), true, true, true);
$moduleConfig = array (
  'modules.${moduleName}.title' => 'Admin Module',
  'modules.${moduleName}.version' => '1.0',
);
$moduleConfigKeys = array_keys($moduleConfig);
foreach($moduleConfigKeys as &$value) $value = AgaviToolkit::expandVariables($value, array('moduleName' => $lcModuleName));
$moduleConfig = array_combine($moduleConfigKeys, $moduleConfig);
AgaviConfig::fromArray($moduleConfig);

?>