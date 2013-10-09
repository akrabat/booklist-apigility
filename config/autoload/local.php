<?php
return array (
  'db' => 
  array (
    'driver' => 'Pdo',
    'dsn' => 'sqlite:/www/zfdev/booklist-apigility/data/booklist.sqlite',
    'adapters' => 
    array (
      'DB\\Book' => 
      array (
        'driver' => 'Pdo_Sqlite',
        'database' => 'data/booklist.sqlite',
      ),
    ),
  ),
);
