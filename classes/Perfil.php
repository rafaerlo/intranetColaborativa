<?php
namespace classes;

class Perfil
{
    private int $id;
    private String $descricao;
    private String $permissoes;
    private int $situacao;
    
    public function __construct(){
        $this->setId(0);
        $this->setDescricao("");
        $this->setPermissoes("");
        $this->setSituacao(0);
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
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @return mixed
     */
    public function getPermissoes()
    {
        return $this->permissoes;
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
     * @param mixed $permissoes
     */
    public function setPermissoes($permissoes)
    {
        $this->permissoes = $permissoes;
    }

    /**
     * @param mixed $situacao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }
}

?>