<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Formulario_de_prueba</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  
  <body>
    <h1>Formulario</h1>

    <form action="recibe.php" method="get">
	<a>Desea recibir factura?</a>
<input name="chckbox" type="checkbox">
<br></br>
<input name="sexo" type="radio" value="Hombre">Hombre</input>
<input name="sexo" type="radio" value="Mujer">Mujer</input>
<br></br>
      <p>Nombre: <input type="text" name="nombre" size="20" maxlength="20" /></p>
<p>Direccion</p>
<input name="direccion" value=""></input>
<br></br>
<p>Codigo Postal</p>
<input name="codpost" type="number" value=""></input>
<br></br>
<p>Forma de envio</p>
 <select name="fenvio">
  <option value="Normal">Normal</option>
  <option value="Por avion">Por avion</option>
  <option value="Urgente">Urgente</option>
</select> 
      <p>
        <input type="submit" value="Comprobar" />
        <input type="reset" value="Borrar" />
      </p>
    </form>
  </body>
</html>