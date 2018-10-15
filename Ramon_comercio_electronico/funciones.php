<?php
function bloqueProducto($producto) {
    ?>
    <div class="producto">
    <span><?php echo $producto['nombre']; ?>: <?php printf("%.2f €",$producto['precio']); ?></span>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style="display:inline">
        <input type="hidden" name="hid_producto" value="<?php echo $producto['id']; ?>" />
        <input type="text" name="cantidad" />
        <input type="submit" name="comprar" value="Añadir al carrito" />
        <input type="submit" name="borrar_carrito" value="borrar carrito"/>
    </form>
    </div>
<?php
}

function comprobar_usuario($usuario,$pass,array $users){
    $encontrado=false;
    for($x=0;$x<count($users);$x++){
        if(in_array($usuario,$users[$x]) && !$encontrado){
            if(in_array(md5($pass),$users[$x])){
                $encontrado=true;
            }
         $x=count($users); 
        }
    }
    if(!$encontrado){
        print '<h1 style="color:red;">Usuario o contrase&ntilde;a incorrectos</h1>';
    }
    return $encontrado;
}

function formatear_cadena($cadena){
    $cadena=str_replace("  "," ",$cadena);
    $cadena=trim($cadena);
    return $cadena;
}

function ver_formulario($usuario){
    print '
            <form action="'. $_SERVER['PHP_SELF'].'" method="post">
            <fieldset>
                <legend>Login</legend>
                <div><span class="error">';
                if (isset($error))  echo $error; 
                print '</span></div>
                <div class="campo">
                    <label for="usuario" >Usuario:</label><br/>
                    <input type="text" name="usuario" id="usuario" maxlength="50" value="'.$usuario.'"/><br/>
                </div>
                <div class="campo">
                    <label for="password" >Contraseña:</label><br/>
                    <input type="password" name="password" id="password" maxlength="50"/><br/>
                </div>
                <div class="campo">
                    <label for="recordar" >Recordar contraseña</label><input type="checkbox" id="recordar" name="recordar" value="1" /><br/>
                </div>
                <div class="campo">
                    <input type="submit" name="enviar" value="Enviar" />
                </div>
            </fieldset>
            </form>';
}
?>