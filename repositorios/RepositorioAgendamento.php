<?php
namespace repositorios;

include('classes/Agendamento.php');
include('repositorios/iRepositorio.php');

use classes\Agendamento;

class RepositorioAgendamento implements iRepositorio
{
    private Agendamento $agendamento;
    private Array $array;
    
    public function __construct(){
        $this->agendamento = new Agendamento();
        $this->array = array(0 =>$this->agendamento);
        return $this;
    }
    
    public function __destruct(){}
    
    public function listarArray(){
        foreach ($this->array as $linha){
            var_dump($linha);
        }
    }
    
    public function adicionar($agendamento){
        array_push($this->array, $agendamento);
    }
    
    public function excluir($id){
        //Não atualiza indices
        unset($this->array[$id]);
    }
    
    public function alterar($id, $agendamento){
        //Atualizar substitui o objeto do array por outro
        $array = array($agendamento);
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