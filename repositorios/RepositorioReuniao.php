<?php
namespace repositorios;

include('classes/Reuniao.php');
include('repositorios/iRepositorio.php');

use classes\Reuniao;

class RepositorioReuniao implements iRepositorio
{
    private Reuniao $reuniao;
    private Array $array;
    
    public function __construct(){
        $this->reuniao = new Reuniao();
        $this->array = array(0 =>$this->reuniao);
        return $this;
    }
    
    public function __destruct(){}
    
    public function listarArray(){
        foreach ($this->array as $linha){
            var_dump($linha);
        }
    }
    
    public function adicionar($reuniao){
        array_push($this->array, $reuniao);
    }
    
    public function excluir($id){
        //Não atualiza indices
        unset($this->array[$id]);
    }
    
    public function alterar($id, $reuniao){
        //Atualizar substitui o objeto do array por outro
        $array = array($reuniao);
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