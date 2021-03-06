<?php

define('LIBS_ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR);
define('CONF_ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'conf' . DIRECTORY_SEPARATOR);

define('CORE_ROOT', dirname(__FILE__). DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);

include LIBS_ROOT . 'Com.php';
include CONF_ROOT . 'Conf.php';
include CORE_ROOT . 'Error.php';


print_r($_SERVER);exit();
Error::init();
Logger::init();

$config = Conf::get();
Com::init($config['libs']);
$markdown = Com::get('markdown');
echo $markdown->text('```this is parsedown ```');