<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    $nombres = array();
    if (isset($_POST['enviar'])) {
        if (isset($_POST['nombres'])) {
            $nombres = $_POST['nombres'];
        }
        $nombres[] = $_POST['nombre'];
    }

    if (!empty($nombres)) {

        echo '<p>Lista de nombres:</p><ul>';
        foreach($nombres as $n) {
            echo '<li>' . $n . '</li>';
        }
        echo '</ul>';
    }
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Nombre: <input type="text" name="nombre" />
<?php
    if (!empty($nombres)) {

        foreach($nombres as $n) {
            echo '<input type="hidden" name="nombres[]" value="' . $n . '" />';
        }
    }
?>
<input type="submit" name="enviar" value="enviar" />
</form>
</body>
</html>