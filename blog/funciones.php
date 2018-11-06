<?php

function bloqueNoticia($noticia) { //REEMPLAZAR MAYUSCULAS
    echo "<li class='bloqueNoticia'>";
    echo '<img src= "images/thumbnail-'.$noticia[0].'.png"/>';
    echo '<h3><a href="noticia.php?id='.$noticia[0].'">'.$noticia[1]."</a></h3>";
    echo "<p>".$noticia[2]."</p>";
    echo '<p><a href="noticia.php?id='.$noticia[0].'">Leer más</a></p>';
    echo "<p>Publicada en: ".$noticia[3];
    print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$noticia[4]." comentarios.</p>";
    echo "</li>";
}

function theHeader($titulo = null) {
    ?>
    <!doctype html>

<html lang="es">
<head>
  <meta charset="utf-8">
  <title><?php if ($titulo) echo $titulo . ' - ';?>The Hack blog</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
<header><h1><a href="index.php">The Hack blog</a></h1></header>
<div id="container">
<div id="main">
<?php
}

function theFooter() {
?>
    </div>
</div>
<footer>Copyright © <?php date("Y") ?><span><a href='index.php'>The Hack Blog</a></span></footer>
</body>
</html>
<?php
}

?>
