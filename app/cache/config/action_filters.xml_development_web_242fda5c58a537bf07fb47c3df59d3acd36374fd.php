<?php

// This is a compiled Agavi configuration file
// Compiled from: C:/ws/tabeshtour/app/config/action_filters.xml
// Generated by: AgaviFilterConfigHandler
// Date: 2013-07-10T06:11:00+0000

$filter = new AgaviExecutionTimeFilter();
$filter->initialize($this->context, array (
  'comment' => true,
  'output_types' => 
  array (
    0 => 'html',
  ),
));
$filters[] = $filter;

?>