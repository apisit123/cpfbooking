<?php
/* database.php */
return array (
  'mysql' => 
  array (
    'dbdriver' => 'mysql',
    'username' => 'root',
    'password' => 'password',
    'dbname' => 'booking',
    'prefix' => 'booking',
    'hostname' => 'localhost',
  ),
  'tables' => 
  array (
    'category' => 'category',
    'language' => 'language',
    'line' => 'line',
    'reservation' => 'reservation',
    'reservation_data' => 'reservation_data',
    'rooms' => 'rooms',
    'rooms_meta' => 'rooms_meta',
    'user' => 'user',
  ),
);