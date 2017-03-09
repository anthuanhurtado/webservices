    <?php
        $db_host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com"; // 
        $db_name = "fn7bttusi3djpmc0"; //nombre de base de datos
        $db_user = "gtj6w2ott9i90eev"; //nombre de usuario
        $db_password = "o7kvu3rh0135kwes";  //contraseña 
    
      $connection = mysqli_connect('am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'gtj6w2ott9i90eev', 'o7kvu3rh0135kwes');
    
     mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");

   $sql_query = "SELECT * FROM products";
    $result = mysqli_query($connection, $sql_query);
    $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>
