<?php
$config = parse_ini_file('./config/parameters.ini');

try {
  $dbh = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['login'], $config['password']);
  // $reviews = $dbh->query('SELECT * from posts');
  // $dbh = null;
} catch (PDOException $e) {
  print "Ошибка подключения к БД!: " . $e->getMessage() . "<br/>";
  die();
}
?>