<?php

// This is a compiled Agavi configuration file
// Compiled from: C:/ws/tabeshtour/app/config/output_types.xml
// Generated by: AgaviOutputTypeConfigHandler
// Date: 2013-07-13T03:16:48+0000

$ot = new AgaviOutputType();
$ot->initialize($this->context, array (
  'http_headers' => 
  array (
    'Content-Type' => 'text/html; charset=UTF-8',
  ),
), 'html', array (
  'php' => 
  array (
    'class' => 'AgaviPhpRenderer',
    'instance' => NULL,
    'parameters' => 
    array (
      'assigns' => 
      array (
        'routing' => 'ro',
        'request' => 'rq',
        'controller' => 'ct',
        'user' => 'us',
        'translation_manager' => 'tm',
        'request_data' => 'rd',
      ),
      'default_extension' => '.php',
      'var_name' => 't',
    ),
  ),
), 'php', array (
  'standard' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
      'decorator' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
          'directory' => 'C:\\ws\\tabeshtour\\app/templates',
          'template' => 'Master',
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
  'admin' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
      'decorator' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
          'directory' => 'C:\\ws\\tabeshtour\\app/templates',
          'template' => 'Admin',
        ),
        'renderer' => NULL,
        'slots' => 
        array (
          'header' => 
          array (
            'action' => 'Widgets.Header',
            'module' => 'Admin',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'sidebar' => 
          array (
            'action' => 'Widgets.Sidebar',
            'module' => 'Admin',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
          'footer' => 
          array (
            'action' => 'Widgets.Footer',
            'module' => 'Admin',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
  'wrapped' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
      'wrapper' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
          'extension' => '.wrapper.php',
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
      'decorator' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
          'directory' => 'C:\\ws\\tabeshtour\\app/templates',
          'template' => 'Master',
        ),
        'renderer' => NULL,
        'slots' => 
        array (
          'nav' => 
          array (
            'action' => 'Widgets.Navigation',
            'module' => 'Default',
            'output_type' => NULL,
            'request_method' => NULL,
            'parameters' => 
            array (
            ),
          ),
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
  'simple' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
  'slot' => 
  array (
    'layers' => 
    array (
      'content' => 
      array (
        'class' => 'AgaviFileTemplateLayer',
        'parameters' => 
        array (
        ),
        'renderer' => NULL,
        'slots' => 
        array (
        ),
      ),
    ),
    'parameters' => 
    array (
    ),
  ),
), 'standard', NULL);
$this->outputTypes['html'] = $ot;
$this->defaultOutputType = 'html';

?>