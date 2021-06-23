<?php
namespace classes;

use DateTime;

class Projeto
{
    private int $id;
    private String $detalhes;
    private int $grupoDeTrabalho;
    private int $pessoaResponsavel;
    private int $situacao;
    private DateTime $criacao;
    private DateTime $encerramento;
    
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
    public function getDetalhes()
    {
        return $this->detalhes;
    }

    /**
     * @return mixed
     */
    public function getGrupoDeTrabalho()
    {
        return $this->grupoDeTrabalho;
    }
    
    public function getPessoaResponsavel()
    {
        return $this->pessoaResponsavel;
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
     * @param mixed $detalhes
     */
    public function setDetalhes($detalhes)
    {
        $this->detalhes = $detalhes;
    }

    /**
     * @param mixed $grupoDeTrabalho
     */
    public function setGrupoDeTrabalho($grupoDeTrabalho)
    {
        $this->grupoDeTrabalho = $grupoDeTrabalho;
    }
    
    public function setPessoaResponsavel($pessoaResponsavel)
    {
        $this->pessoaResponsavel = $pessoaResponsavel;
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