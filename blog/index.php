<?php
require_once("funciones.php");
require_once("bd.php");

theHeader();
?>

<h2>Últimas entradas</h2>
<ul class="listaNoticias">
<?php 

$consulta = mysqli_query($conexion, "SELECT N.id_noticia,titular,entradilla,N.fecha,COUNT(C.id_comentario) as 'unidades' FROM noticias N
LEFT JOIN comentarios C ON C.id_noticia=N.id_noticia GROUP BY N.id_noticia,titular,entradilla,N.fecha");

while($noticia = mysqli_fetch_row($consulta)){
    bloqueNoticia($noticia);
}
mysqli_close($conexion);
?>
</ul>
<?php
theFooter();

?>