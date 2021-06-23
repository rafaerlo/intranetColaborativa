<?php
namespace classes;

use DateTime;

class Despesa
{
    private int $id;
    private String $descricao;
    private float $valor;
    private DateTime $emissao;
    private DateTime $vencimento;
    private int $situacao;
    private int $devedor;
    private String $codigoBarras;
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
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @return mixed
     */
    public function getEmissao()
    {
        return $this->emissao;
    }

    /**
     * @return mixed
     */
    public function getVencimento()
    {
        return $this->vencimento;
    }

    /**
     * @return mixed
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * @return mixed
     */
    public function getDevedor()
    {
        return $this->devedor;
    }

    /**
     * @return mixed
     */
    public function getCodigoBarras()
    {
        return $this->codigoBarras;
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
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @param mixed $emissao
     */
    public function setEmissao($emissao)
    {
        $this->emissao = $emissao;
    }

    /**
     * @param mixed $vencimento
     */
    public function setVencimento($vencimento)
    {
        $this->vencimento = $vencimento;
    }

    /**
     * @param mixed $situacao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }

    /**
     * @param mixed $devedor
     */
    public function setDevedor($devedor)
    {
        $this->devedor = $devedor;
    }

    /**
     * @param mixed $codigoBarras
     */
    public function setCodigoBarras($codigoBarras)
    {
        $this->codigoBarras = $codigoBarras;
    }

    
    
}

