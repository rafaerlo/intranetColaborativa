<?php
namespace repositorios;

include('classes/Pessoa.php');
include('repositorios/iRepositorio.php');

use classes\Pessoa;

class RepositorioPessoa implements iRepositorio
{
    private Pessoa $pessoa;
    private Array $array;
    
    public function __construct(){
        $this->pessoa = new Pessoa();
        $this->array = array(0 =>$this->pessoa);
        return $this;
    }
    
    public function __destruct(){}
    
    public function listarArray(){
        foreach ($this->array as $linha){
            var_dump($linha);
        }
    }
    
    public function adicionar($pessoa){
        array_push($this->array, $pessoa);
    }
    
    public function excluir($id){
        //Não atualiza indices
        unset($this->array[$id]);
    }
    
    public function alterar($id, $pessoa){
        //Atualizar substitui o objeto do array por outro
        $array = array($pessoa);
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