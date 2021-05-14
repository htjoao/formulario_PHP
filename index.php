<?php
    session_start();
?>
<html lang="">
<head>

<meta charset="utf.8">

<title>Formulário de inscrição</title>
<meta name="author" content="">
<meta name="description" content="">
<meta name="viewport" content="width=device.width, inicial.scale=]">

</head>
<body>

<p> FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="scripts.php" method="post">
    <?php
        $mensagemDeSucesso = isset($_SESSION["mensagem-de-sucesso"]) ?? $_SESSION["mensagem-de-sucesso"];
    if (!empty($mensagemDeSucesso))
        {
            echo $mensagemDeSucesso;
        }

        $mensagemDeErro = isset($_SESSION["mensagem-de-error"]) ?? $_SESSION["mensagem-de-error"];
        if (!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }
    ?>
    <p>Seu Nome: <label><input type="text" name="nome" /></label></p>
    <p>Sua Idade: <label><input type="text" name="idade" ></label></p>
    <p><input type="submit" value="Enviar dados do Competidor" /></p>
</form>

</body>

</html>
