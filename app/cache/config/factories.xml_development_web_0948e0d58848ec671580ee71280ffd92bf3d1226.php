<?php

// This is a compiled Agavi configuration file
// Compiled from: C:/ws/tabeshtour/app/config/factories.xml
// Generated by: AgaviFactoryConfigHandler
// Date: 2013-06-27T19:37:00+0000

$this->factories['execution_container'] = array (
  'class' => 'AgaviExecutionContainer',
  'parameters' => 
  array (
  ),
);
$this->factories['validation_manager'] = array (
  'class' => 'AgaviValidationManager',
  'parameters' => 
  array (
  ),
);
$this->factories['dispatch_filter'] = array (
  'class' => 'AgaviDispatchFilter',
  'parameters' => 
  array (
  ),
);
$this->factories['execution_filter'] = array (
  'class' => 'AgaviExecutionFilter',
  'parameters' => 
  array (
  ),
);
$this->factories['security_filter'] = array (
  'class' => 'AgaviSecurityFilter',
  'parameters' => 
  array (
  ),
);
$this->factories['filter_chain'] = array (
  'class' => 'AgaviFilterChain',
  'parameters' => 
  array (
  ),
);
$this->factories['response'] = array (
  'class' => 'AgaviWebResponse',
  'parameters' => 
  array (
    'send_content_length' => false,
  ),
);
$this->databaseManager = new AgaviDatabaseManager();
$this->databaseManager->initialize($this, array (
));
$this->databaseManager->startup();
$this->request = new AgaviWebRequest();
$this->request->initialize($this, array (
));
$this->routing = new AgaviWebRouting();
$this->routing->initialize($this, array (
));
$this->controller = new AgaviController();
$this->controller->initialize($this, array (
));
$this->storage = new AgaviSessionStorage();
$this->storage->initialize($this, array (
));
$this->storage->startup();
$this->user = new AgaviSecurityUser();
$this->user->initialize($this, array (
));
$this->user->startup();
$this->routing->startup();
$this->request->startup();
$this->controller->startup();
$this->shutdownSequence = array($this->controller,
$this->request,
$this->routing,
$this->user,
$this->storage,
$this->databaseManager);

?>