<?php
namespace repositorios;

include('classes/Servico.php');
include('repositorios/iRepositorio.php');

use classes\Servico;

class RepositorioServico implements iRepositorio
{
    private Servico $servico;
    private Array $array;
    
    public function __construct(){
        $this->servico = new Servico();
        $this->array = array(0 =>$this->servico);
        return $this;
    }
    
    public function __destruct(){}
    
    public function listarArray(){
        foreach ($this->array as $linha){
            var_dump($linha);
        }
    }
    
    public function adicionar($servico){
        array_push($this->array, $servico);
    }
    
    public function excluir($id){
        //Não atualiza indices
        unset($this->array[$id]);
    }
    
    public function alterar($id, $servico){
        //Atualizar substitui o objeto do array por outro
        $array = array($servico);
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