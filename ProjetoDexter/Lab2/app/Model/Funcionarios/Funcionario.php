<?php
namespace app\Model\Funcionarios;

use lib\Db\AbstractEntity;

class Funcionario extends AbstractEntity
{

    private $nome;

    private $email;

    private $senha;

    private $prfId;

    /**
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     *
     * @param mixed $nome            
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     *
     * @param mixed $email            
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     *
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     *
     * @param mixed $senha            
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     *
     * @return mixed
     */
    public function getPrfId()
    {
        return $this->prfId;
    }

    /**
     *
     * @param mixed $prfId            
     */
    public function setPrfId($prfId)
    {
        $this->prfId = $prfId;
    }

    /**
     *
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @param field_type $id            
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function isNew()
    {
        return is_null($this->id);
    }
}
