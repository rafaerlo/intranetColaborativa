<?php
namespace repositorios;

include('classes/Projeto.php');
include('repositorios/iRepositorio.php');

use classes\Projeto;

class RepositorioProjeto implements iRepositorio
{
    private Projeto $projeto;
    private Array $array;
    
    public function __construct(){
        $this->projeto = new Projeto();
        $this->array = array(0 =>$this->projeto);
        return $this;
    }
    
    public function __destruct(){}
    
    public function listarArray(){
        foreach ($this->array as $linha){
            var_dump($linha);
        }
    }
    
    public function adicionar($projeto){
        array_push($this->array, $projeto);
    }
    
    public function excluir($id){
        //Não atualiza indices
        unset($this->array[$id]);
    }
    
    public function alterar($id, $projeto){
        //Atualizar substitui o objeto do array por outro
        $array = array($projeto);
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