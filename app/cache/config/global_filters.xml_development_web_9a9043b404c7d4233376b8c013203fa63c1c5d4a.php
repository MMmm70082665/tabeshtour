<?php

// This is a compiled Agavi configuration file
// Compiled from: C:/ws/tabeshtour/app/config/global_filters.xml
// Generated by: AgaviFilterConfigHandler
// Date: 2013-07-06T19:44:52+0000

$filter = new AgaviFormPopulationFilter();
$filter->initialize($this->context, array (
  'methods' => 
  array (
    0 => 'write',
  ),
  'output_types' => 
  array (
    0 => 'html',
  ),
  'field_error_messages' => 
  array (
    'self::${htmlnsPrefix}input[not(@type=\'checkbox\' or @type=\'radio\')] | self::${htmlnsPrefix}textarea' => 
    array (
      'location' => 'after',
      'container' => '<div class="errors">${errorMessages}</div>',
      'markup' => '<p class="error">${errorMessage}</p>',
    ),
    'parent::*' => 
    array (
      'location' => 'child',
      'container' => '<div class="errors">${errorMessages}</div>',
      'markup' => '<p class="error">${errorMessage}</p>',
    ),
  ),
  'error_messages' => 
  array (
    'self::*' => 
    array (
      'location' => 'before',
      'markup' => '<p class="error">${errorMessage}</p>',
    ),
  ),
));
$filters[] = $filter;

?>