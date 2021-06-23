<?php
namespace repositorios;

interface iRepositorio
{
    public function __construct();
    public function __destruct();
    public function listarArray();
    public function adicionar($perfil);
    public function excluir($id);
    public function alterar($id, $perfil);
    public function ver($id);
    public function numeroLinhas();
}