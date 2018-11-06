<?php
require_once "funciones.php";
require_once "bd.php";

if (isset($_POST['btnComentario'])) {

    $consulta = mysqli_query($conexion, "
 INSERT INTO comentarios (autor,texto,fecha,id_noticia) VALUES('" .
        $_POST['txtAutor'] . "','" .
        $_POST['txtComentario'] . "','" . date("Y-m-d H:i:s") . "'," . $_GET['id'] . ")");

}

if (false) { /* COMPROBAR SI NO HA HABIDO RESULTADOS.
SI ES ASÍ, LANZAMOS ERROR 404*/
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);
    include 'error404.html';
    // mysqli_close($conexion);
    exit();
}

print '<p class="small"><a href="index.php">← Volver a portada</a></p>';
$consulta = $conexion->stmt_init();
$consulta->prepare("SELECT titular,fecha,cuerpo FROM noticias WHERE id_noticia=?");
$cod_noticia = $_GET['id'];
$consulta->bind_param('s', $cod_noticia);
$consulta->execute();
$consulta->bind_result($titular, $fecha, $cuerpo);

$consulta->fetch();
theHeader($titular);
print "<h2>  $titular </h2>";
print ' <p class="small">Publicado en: ' . $fecha . '</p>'; //</p>
print '
    <div id="imgcover"><img src="images/cover-' . $cod_noticia . '.png" /></div>';
print $cuerpo;

print '<h2>Comentarios</h2>';

//OBTENER COMENTARIOS DE LA NOTICIA
if (true) { //SI HAY COMENTARIOS
    $consulta->prepare("SELECT autor,texto,fecha FROM comentarios WHERE id_noticia=" . $cod_noticia);
    $consulta->execute();
    $consulta->bind_result($autor, $texto, $fecha);
    echo '<ul>';
    while ($consulta->fetch()) {

        echo "<li class='bloqueComentario'>";
        echo "<p><strong>" . $autor . "</strong> en " . $texto . ":";
        echo "<p>" . $fecha . "</p>";
        echo "</li>";
    }
    $consulta->close();

} else {
    echo "<p>Sin comentarios</p>";
}
?>
    <strong>Deja un comentario</strong>
    <form id="frmComentario" method="post" action="<?php echo $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] ?>">
    <input name="hidNoticia" type="hidden" value="<?php echo $_GET['id']; ?>" />
    <p><input name="txtAutor" type="text" placeholder="Nombre" /></p>
    <p><textarea placeholder="Escribe tu comentario" name="txtComentario"></textarea></p>
    <p><input type="submit" name="btnComentario" value="Comentar" /></p>
    </form>
    <?php
mysqli_close($conexion);
theFooter();

?>