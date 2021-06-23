<?php
namespace classes;

class Servico
{
    private int $id;
    private String $descricao;
    private String $detalhes;
    private String $socialMedia;
    private int $pessoaResponsavel;
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
    public function getDetalhes()
    {
        return $this->detalhes;
    }

    /**
     * @return mixed
     */
    public function getSocialMedia()
    {
        return $this->socialMedia;
    }
    
    public function getPessoaResponsavel()
    {
        return $this->pessoaResponsavel;
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
     * @param mixed $detalhes
     */
    public function setDetalhes($detalhes)
    {
        $this->detalhes = $detalhes;
    }

    /**
     * @param mixed $socialMedia
     */
    public function setSocialMedia($socialMedia)
    {
        $this->socialMedia = $socialMedia;
    }
    
    public function setPessoaResponsavel($pessoaResponsavel)
    {
        $this->pessoaResponsavel = $pessoaResponsavel;
    }
}

