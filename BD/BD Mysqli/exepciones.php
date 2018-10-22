<?php
$dwes = new PDO("mysql:host=localhost; dbname=dwes", "dwes", "abc123");
$dwes->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
 $sql = "SELECT sddfsdf FROM stock";
 $result = $dwes->query($sql);

}
catch (PDOException $p) {
 echo "Error ".$p->getMessage()."<br />";
}
?>