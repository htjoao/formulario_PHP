<?php
//Crie um projeto em PHP para uma competição de natação,
//o sistema deverá permitir a inserção de competidores com seu nome e idade,
//e o sistema deverá identificar em qual categoria o nadador irá competir,
//por exemplo, 6 e 12 anos categoria infantil, de 13 a 18 categoria adolescente,
//acima de 18 categoria adulto, o sistema deverá retornar a categoria para cada nadador que for cadastrado.


$categorias=[
    'infantil',
    'adolecente',
    'adulto',
    'idoso'

];

//print_r($categorias);

$nome ='JoãoVictor';
$idade = 27;

//var_dump($nome, $idade);

if ($idade >= 6 && $idade <= 12)
{
    for ($i= 0 ; $i <= count($categorias); $i++  )
    {
        if ($categorias[$i] == 'infantil')
            echo "o nadador " . $nome . " compete na categoria infantil";
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for ($i= 0 ; $i <= count($categorias); $i++  )
    {
        if ($categorias[$i] == 'adolecente')
            echo "o nadador " . $nome . " compete na categoria adolecente";
    }
}
else if($idade >=19 && $idade <= 59)
{
    for ($i= 0 ; $i <= count($categorias); $i++  )
    {
        if ($categorias[$i] == 'adulto')
            echo "o nadador " . $nome . " compete na categoria adulto";
    }
}

else {
    echo 'idoso';
}