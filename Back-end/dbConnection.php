<?php
$host = 'localhost';
$dbname = 'gestion_biblio';
$dbUsername = 'root';
$dbPassword = '';
$db = new mysqli($host,$dbUsername,$dbPassword,$dbname);

if($db->connect_errno){
  die("connect error : ".$db->connect_error);
}
return $db;