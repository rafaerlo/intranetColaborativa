<?php
namespace classes;

use DateTime;

class Atividade
{
    private int $id;
    private String $descricao;
    private String $detalhe;
    private int $projeto;
    private int $grupoDeTrabalho;
    private int $pessoa;
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
    public function getDescricao()
    {
        return $this->descricao;
    }
    
    /**
     * @return mixed
     */
    public function getDetalhe()
    {
        return $this->detalhe;
    }
    
    /**
     * @return mixed
     */
    public function getProjeto()
    {
        return $this->projeto;
    }
    
    /**
     * @return mixed
     */
    public function getGrupoDeTrabalho()
    {
        return $this->grupoDeTrabalho;
    }
    
    /**
     * @return mixed
     */
    public function getPessoa()
    {
        return $this->pessoa;
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
    
    //Sets
    
    
    /**
     * @return mixed
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * @return mixed
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    
    /**
     * @return mixed
     */
    public function setDetalhe($detalhe)
    {
        $this->detalhe = $detalhe;
    }
    
    /**
     * @return mixed
     */
    public function setProjeto($projeto)
    {
        $this->projeto = $projeto;
    }
    
    /**
     * @return mixed
     */
    public function setGrupoDeTrabalho($grupoDeTrabalho)
    {
        $this->grupoDeTrabalho = $grupoDeTrabalho;
    }
    
    /**
     * @return mixed
     */
    public function setPessoa($pessoa)
    {
        $this->pessoa = $pessoa;
    }
    
    /**
     * @return mixed
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