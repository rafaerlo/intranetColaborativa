<?php
include('repositorios/RepositorioPerfil.php');

use repositorios\RepositorioPerfil;
use classes\Perfil;


$repositorioPerfil = new repositorioPerfil();

$perfil = new Perfil();
$perfil->setId(1);
$perfil->setDescricao("Rafael");
$perfil->setPermissoes("todas");
$perfil->setSituacao(0);

$repositorioPerfil->adicionar($perfil);
//$repositorioPerfil->listarArray();

//Exclusгo nгo atualiza нndice
//$repositorioPerfil->excluir(0);

//Alteraзгo de array
$perfil = new Perfil();
$perfil->setId(2);
$perfil->setDescricao("Tiago");
$perfil->setPermissoes("restrito");
$perfil->setSituacao(1);
$repositorioPerfil->alterar(0, $perfil);

//$repositorioPerfil->listarArray();
//$repositorioPerfil->ver(1);

$repositorioPerfil->numeroLinhas();
?>