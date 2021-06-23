<?php
namespace classes;

use DateTime;

class Agendamento
{
    private int $id;
    private String $descricao;
    private DateTime $dataHora;
    private int $servico;
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
    public function getDataHora()
    {
        return $this->dataHora;
    }

    /**
     * @return mixed
     */
    public function getServico()
    {
        return $this->servico;
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
     * @param mixed $dataHora
     */
    public function setDataHora($dataHora)
    {
        $this->dataHora = $dataHora;
    }

    /**
     * @param mixed $servico
     */
    public function setServico($servico)
    {
        $this->servico = $servico;
    }
}

