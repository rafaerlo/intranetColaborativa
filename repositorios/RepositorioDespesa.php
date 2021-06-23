<?php
namespace repositorios;

include('classes/Despesa.php');
include('repositorios/iRepositorio.php');

use classes\Despesa;

class RepositorioDespesa implements iRepositorio
{
    private Despesa $despesa;
    private Array $array;
    
    public function __construct(){
        $this->despesa = new Despesa();
        $this->array = array(0 =>$this->despesa);
        return $this;
    }
    
    public function __destruct(){}
    
    public function listarArray(){
        foreach ($this->array as $linha){
            var_dump($linha);
        }
    }
    
    public function adicionar($despesa){
        array_push($this->array, $despesa);
    }
    
    public function excluir($id){
        //Não atualiza indices
        unset($this->array[$id]);
    }
    
    public function alterar($id, $despesa){
        //Atualizar substitui o objeto do array por outro
        $array = array($despesa);
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