<?php

session_start();

$categorias=[
    'infantil',
    'adolecente',
    'adulto',
    'idoso'
];

$nome =$_POST['nome'];
$idade =$_POST['idade'];

if (empty($nome))
{
    $_SESSION['mensagem-de-erro'] = "O Nome não pode ser vazio, por favor preencha-o novamente";
    header('location: index.php');
    return;
}

else if (strlen($nome) < 3)
{
    $_SESSION['mensagem-de-erro'] = "O nome deve ter no minimo 3 letras";
    header('location: index.php');
    return;
}

else if (strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = "O nome muito exetenso";
    header('location: index.php');
    return;
}
else if (!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = "Informe um numero para a sua idade";
    header('location: index.php');
    return;
}


if ($idade >= 6 && $idade <= 12)
{
    for ($i= 0 ; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'Infantil')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na categoria " .$categorias[$i];
            header('location: index.php');
            return;
        }
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for ($i= 0 ; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'Adolecente')
        {
            $_SESSION['mensagem-de-sucesso'] = " nadador " . $nome . " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
}
else if($idade >=19 && $idade <= 59)
{
    for ($i= 0 ; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'Adulto')
        {
            $_SESSION['mensagem-de-sucesso'] = " nadador " . $nome . " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
}
else {

    for ($i= 0 ; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'Idoso')
        {
            $_SESSION['mensagem-de-sucesso'] = " nadador " . $nome . " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
}


