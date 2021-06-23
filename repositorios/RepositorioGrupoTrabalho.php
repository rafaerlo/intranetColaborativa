<?php
namespace repositorios;

include('classes/GrupoDeTrabalho.php');
include('repositorios/iRepositorio.php');

use classes\GrupoDeTrabalho;

class RepositorioGrupoTrabalho implements iRepositorio
{
    private GrupoDeTrabalho $gt;
    private Array $array;
    
    public function __construct(){
        $this->servico = new GrupoDeTrabalho();
        $this->array = array(0 =>$this->gt);
        return $this;
    }
    
    public function __destruct(){}
    
    public function listarArray(){
        foreach ($this->array as $linha){
            var_dump($linha);
        }
    }
    
    public function adicionar($gt){
        array_push($this->array, $gt);
    }
    
    public function excluir($id){
        //Não atualiza indices
        unset($this->array[$id]);
    }
    
    public function alterar($id, $gt){
        //Atualizar substitui o objeto do array por outro
        $array = array($gt);
        $this->array = array_replace($this->array, $array);
    }
    
    public function ver($id){
        var_dump($this->array[$id]);
    }
    
    public function numeroLinhas(){
        var_dump(count($this->array));
    }
}

?>