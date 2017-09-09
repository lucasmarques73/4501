<?php
namespace app\Model\FaleConosco;

use lib\Db\AbstractEntity;

class FaleConosco extends AbstractEntity
{

    private $nome;

    private $assunto;

    private $mensagem;

    private $email;

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
    public function getAssunto()
    {
        return $this->assunto;
    }

    /**
     *
     * @param mixed $assunto            
     */
    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;
    }

    /**
     *
     * @return mixed
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     *
     * @param mixed $mensagem            
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
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
    public function getIp()
    {
        return $this->ip;
    }

    /**
     *
     * @param mixed $ip            
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
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
