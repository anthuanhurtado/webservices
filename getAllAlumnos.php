<?php
$db_host="if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$db_name="m8hu70549sd5hz6o";
$db_user="vhr4alktn0c9217k";
$db_password="msutue0q12dumhtr";
    
     $connection = mysql_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysql_error());
    
mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
    @mysql_query("SET NAMES 'utf8'");

$sql_query = "SELECT * FROM alumnos;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>