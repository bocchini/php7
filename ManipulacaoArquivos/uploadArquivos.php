<form method="post" enctype="multipart/form-data">
	<input type="file" name="fileUpload">
	<button type="submit">Enviar</button>
</form>

<?php 

if($_SERVER["REQUEST_METHOD"] === "POST"){
	$file = $_FILES["fileUpload"];
	if($file["error"]){
		throw new Exception("Error:" . $file["error"]);		
	}

	$dirUpLoads = "uploads";
	if(!is_dir($dirUpLoads)){
		mkdir($dirUpLoads);
	}

	if(move_uploaded_file($file['tmp_name'], $dirUpLoads . DIRECTORY_SEPARATOR . $file["name"]))
	{
		echo "Upload realizado com sucesso";
	}else{
		echo "Não foi realizar o upload da imagem";
	}
}

 ?>