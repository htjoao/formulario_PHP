<?php

include"servicos/servicoMensagemSessao.php";
include"servicos/sevicoValidacao.php";
include"servicos/servicoCategoriaCompetido.php";

$nome =$_POST['nome'];
$idade =$_POST['idade'];

defineCategoriaCompetidor($nome , $idade);

header('location:index.php');
