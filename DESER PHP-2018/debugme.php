<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
<h1>Lista de números</h1>
<?php
$j=10; // Limite del bucle
for ($i = 0; $i<$j; $j++) {
    echo "<li>" . $i;
    if ($i=7) {
        echo " (el número de la suerte)";
    }
    echo "</li>";
}
?>
</body>
</html>
