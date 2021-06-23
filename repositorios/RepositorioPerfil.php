<?php
namespace repositorios;

include('classes/Perfil.php');
include('repositorios/iRepositorio.php');

use classes\Perfil;

class RepositorioPerfil implements iRepositorio
{
    private Perfil $perfil;
    private Array $array;
    
    public function __construct(){
        $this->perfil = new Perfil();
        $this->array = array(0 =>$this->perfil);
        return $this;
    }

    public function __destruct(){}
    
    public function listarArray(){
        foreach ($this->array as $linha){
            var_dump($linha);
        }
    }
    
    public function adicionar($perfil){
        array_push($this->array, $perfil);
    }
    
    public function excluir($id){
        //Não atualiza indices
        unset($this->array[$id]);
    }
    
    public function alterar($id, $perfil){
        //Atualizar substitui o objeto do array por outro
        $array = array($perfil);
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