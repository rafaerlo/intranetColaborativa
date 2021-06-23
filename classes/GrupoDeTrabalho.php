<?php
namespace classes;

class GrupoDeTrabalho
{
    private int $id;
    private String $descricao;
    private int $responsavel;
    private String $detalhesGrupo;
    private int $situacao;
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
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * @return mixed
     */
    public function getDetalhesGrupo()
    {
        return $this->detalhesGrupo;
    }

    /**
     * @return mixed
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @param mixed $responsavel
     */
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;
    }

    /**
     * @param mixed $detalhesGrupo
     */
    public function setDetalhesGrupo($detalhesGrupo)
    {
        $this->detalhesGrupo = $detalhesGrupo;
    }

    /**
     * @param mixed $situacao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }
}