<?php 
if(isset($_POST['enviar-formulario'])):
    $formatosPermitidos=array("png","jpeg","jpg");
    $extensao=pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);

    if(in_array($extensao,$formatosPermitidos)):
        $pasta="img/";
        $temporario=$_FILES["arquivo"]['tmp_name'];
        $novoNome=uniqid().".$extensao";

        if(move_uploaded_file($temporario,$pasta.$novoNome)):

        $mensagem="<script> alert('funcinaou') </script>";
         

        else:
            $mensagem="Erro, nao funciona";

        endif;

    else: 
        $mensagem="formato invalido";
    endif;

echo $mensagem;

endif;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de imagem</title>
</head>
<body>
    
    <form method="POST" id="upload-imagem" enctype="multipart/form-data">

        <input type="file" name="arquivo" id="file" >
        <input type="submit" value="enviar" name="enviar-formulario">

    </form>

</body>
</html>