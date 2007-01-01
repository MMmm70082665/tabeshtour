<?php

// This is a compiled Agavi configuration file
// Compiled from: C:/ws/tabeshtour/app/config/logging.xml
// Generated by: AgaviLoggingConfigHandler
// Date: 2007-01-01T10:09:38+0000

${'_layout_DateTimeLayout'} = new AgaviTimestampLoggerLayout();
${'_layout_DateTimeLayout'}->initialize($this->context, array (
));
${'_appender_DebugLogAppender'} = new AgaviRotatingFileLoggerAppender();
${'_appender_DebugLogAppender'}->initialize($this->context, array (
  'dir' => 'C:\\ws\\tabeshtour\\app/log/',
  'prefix' => 'debug-',
));
${'_appender_DebugLogAppender'}->setLayout(${'_layout_DateTimeLayout'});
${'_appender_ApplicationLogAppender'} = new AgaviFileLoggerAppender();
${'_appender_ApplicationLogAppender'}->initialize($this->context, array (
  'file' => 'C:\\ws\\tabeshtour\\app/log/application.log',
));
${'_appender_ApplicationLogAppender'}->setLayout(${'_layout_DateTimeLayout'});
${'_appender_ErrorLogAppender'} = new AgaviRotatingFileLoggerAppender();
${'_appender_ErrorLogAppender'}->initialize($this->context, array (
  'dir' => 'C:\\ws\\tabeshtour\\app/log/',
  'prefix' => 'error-',
));
${'_appender_ErrorLogAppender'}->setLayout(${'_layout_DateTimeLayout'});
${'_appender_StdErrorAppender'} = new AgaviStderrLoggerAppender();
${'_appender_StdErrorAppender'}->initialize($this->context, array (
));
${'_appender_StdErrorAppender'}->setLayout(${'_layout_DateTimeLayout'});
${'_logger_debug'} = new AgaviLogger();
${'_logger_debug'}->setAppender('DebugLogAppender', ${'_appender_DebugLogAppender'});
${'_logger_debug'}->setLevel(AgaviLogger::DEBUG);
$this->setLogger('debug', ${'_logger_debug'});
${'_logger_default'} = new AgaviLogger();
${'_logger_default'}->setAppender('ApplicationLogAppender', ${'_appender_ApplicationLogAppender'});
${'_logger_default'}->setLevel(AgaviLogger::INFO);
$this->setLogger('default', ${'_logger_default'});
${'_logger_error'} = new AgaviLogger();
${'_logger_error'}->setAppender('ErrorLogAppender', ${'_appender_ErrorLogAppender'});
${'_logger_error'}->setAppender('StdErrorAppender', ${'_appender_StdErrorAppender'});
${'_logger_error'}->setLevel(AgaviLogger::ALL ^ AgaviLogger::DEBUG ^ AgaviLogger::INFO);
$this->setLogger('error', ${'_logger_error'});
$this->setDefaultLoggerName('default');

?>