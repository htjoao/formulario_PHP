<?php



function defineCategoriaCompetidor(string $nome , string $idade) : ?string

{
    $categorias=[
        'infantil',
        'adolecente',
        'adulto',
        'idoso'
    ];
    if (validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        if ($idade >= 6 && $idade <= 12)
        {
            for ($i= 0 ; $i <= count($categorias); $i++)
            {
                if ($categorias[$i] == 'Infantil')
                {
                    setarMensagemSucesso( "O nadador " . $nome . " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        else if($idade >= 13 && $idade <= 18)
        {
            for ($i= 0 ; $i <= count($categorias); $i++)
            {
                if ($categorias[$i] == 'Adolecente')
                {
                    setarMensagemSucesso( " nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        }
        else if($idade >=19 && $idade <= 59)
        {
            for ($i= 0 ; $i <= count($categorias); $i++)
            {
                if ($categorias[$i] == 'Adulto')
                {
                    setarMensagemSucesso( " nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        }
        else 
        {
            for ($i= 0 ; $i <= count($categorias); $i++)
            {
                if ($categorias[$i] == 'Idoso')
                {
                    setarMensagemSucesso( " nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        }
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
