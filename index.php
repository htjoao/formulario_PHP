<?php

$categorias=[
    'infantil',
    'adolecente',
    'adulto',
    'idoso'
];

$nome ='JoãoVictor';
$idade = 27;

if ($idade >= 6 && $idade <= 12)
{
    for ($i= 0 ; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil')
            echo "o nadador " . $nome . " compete na categoria infantil";
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for ($i= 0 ; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adolecente')
            echo "o nadador " . $nome . " compete na categoria adolecente";
    }
}
else if($idade >=19 && $idade <= 59)
{
    for ($i= 0 ; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adulto')
            echo "o nadador " . $nome . " compete na categoria adulto";
    }
}
else {
    echo 'idoso';
}
