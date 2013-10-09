<?php
return array (
  'db' => 
  array (
    'adapters' => 
    array (
      'DB\\Book' => 
      array (
      ),
    ),
  ),
  'service_manager' => 
  array (
    'factories' => 
    array (
      'Zend\\Db\\Adapter\\Adapter' => 'Zend\\Db\\Adapter\\AdapterServiceFactory',
    ),
  ),
);
