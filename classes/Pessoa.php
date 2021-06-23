<?php
namespace classes;

use DateTime;

class Pessoa
{
    private int $id;
    private String $nome;
    private String $telefone;
    private String $email;
    private int $situacao;
    private int $perfil;
    private DateTime $criacao;
    private DateTime $encerramento;
    
    public function __construct(){
        $this->setId(0);
        $this->setNome("");
        $this->setTelefone("");
        $this->setEmail("");
        $this->setSituacao(0);
        $this->setPerfil(0);
        $this->setCriacao("");
        $this->setEncerramento("");
    }
    
    public function __destruct(){}
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * @return mixed
     */
    public function getSituacao()
    {
        return $this->situacao;
    }
    
    public function getCriacao()
    {
        return $this->criacao;
    }
    
    public function getEncerramento()
    {
        return $this->encerramento;
    }
    

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $perfil
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    }

    /**
     * @param mixed $situacao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }

    
    /**
     * @return mixed
     */
    public function setCriacao($criacao)
    {
        $this->criacao = $criacao;
    }
    
    /**
     * @return mixed
     */
    public function setEncerramento($encerramento)
    {
        $this->encerramento = $encerramento;
    }
}