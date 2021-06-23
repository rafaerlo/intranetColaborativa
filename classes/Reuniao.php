<?php
namespace classes;

use DateTime;

class Reuniao
{
    private int $id;
    private String $descricao;
    private String $link;
    private DateTime $horario;
    private String $ata;
    private int $situacao;
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
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return mixed
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * @return mixed
     */
    public function getAta()
    {
        return $this->ata;
    }

    /**
     * @return mixed
     */
    public function getSituacao()
    {
        return $this->situacao;
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
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @param mixed $horario
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;
    }

    /**
     * @param mixed $ata
     */
    public function setAta($ata)
    {
        $this->ata = $ata;
    }

    /**
     * @param mixed $situacao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }
    
    public function setPessoaResponsavel($pessoaResponsavel)
    {
        $this->pessoaResponsavel = $pessoaResponsavel;
    }
}