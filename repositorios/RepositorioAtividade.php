<?php
namespace repositorios;

include('classes/Atividade.php');
include('repositorios/iRepositorio.php');

use classes\Atividade;

class RepositorioAtividade implements iRepositorio
{
    private Atividade $atividade;
    private Array $array;
    
    public function __construct(){
        $this->atividade = new Atividade();
        $this->array = array(0 =>$this->atividade);
        return $this;
    }
    
    public function __destruct(){}
    
    public function listarArray(){
        foreach ($this->array as $linha){
            var_dump($linha);
        }
    }
    
    public function adicionar($atividade){
        array_push($this->array, $atividade);
    }
    
    public function excluir($id){
        //Não atualiza indices
        unset($this->array[$id]);
    }
    
    public function alterar($id, $atividade){
        //Atualizar substitui o objeto do array por outro
        $array = array($atividade);
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