<?php

function validaNome(string $nome) : bool
{
    if (empty($nome))
    {
        setarMensagemErro('O Nome não pode ser vazio, por favor preencha-o novamente');
        return false;
    }

    else if (strlen($nome) < 3)
    {
       setarMensagemErro('O nome deve ter no minimo 3 letras');
        return false;
    }

    else if (strlen($nome) > 40)
    {
       setarMensagemErro('O nome muito exetenso');
        return false;
    }
    return true;
}
function validaIdade(string $idade) : bool
{
    if (!is_numeric($idade))
    {
        setarMensagemErro('Informe um numero para a sua idade');
        return false;
    }
    return true;
}
