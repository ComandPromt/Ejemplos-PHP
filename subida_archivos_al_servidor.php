<?php

$uploadedfile_size=$_FILES['uploadedfile'][size];
$file_name=$_FILES[uploadedfile][name];
$add="uploads/$file_name";

if(move_uploaded_file ($_FILES[uploadedfile][tmp_name], $add)){
	echo " Ha sido subido satisfactoriamente";
}

else{
	echo "Error al subir el archivo";
}

?>
<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input name="uploadedfile" type="file" />
<input type="submit" value="Subir archivo" />
</form>