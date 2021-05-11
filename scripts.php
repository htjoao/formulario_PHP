<?php

$categorias=[
    'infantil',
    'adolecente',
    'adulto',
    'idoso'
];

$nome =$_POST['nome'];
$idade =$_POST['idade'];

if ($idade >= 6 && $idade <= 12)
{
    for ($i= 0 ; $i <= count($categorias); $i++)
    {
        if ('infantil' == $categorias[$i])
            echo "o nadador " . $nome . " compete na categoria infantil";
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for ($i= 0 ; $i <= count($categorias); $i++)
    {
        if ('adolecente' == $categorias[$i])
            echo "o nadador " . $nome . " compete na categoria adolecente";
    }
}
else if($idade >=19 && $idade <= 59)
{
    for ($i= 0 ; $i <= count($categorias); $i++)
    {
        if ('adulto' == $categorias[$i])
            echo "o nadador " . $nome . " compete na categoria adulto";
    }
}
else {
    echo 'idoso';
}


