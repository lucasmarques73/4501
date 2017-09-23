<?php

namespace Model\Banners;

class Banners
{
    
    private $id;
    
    private $nome;

    private $descricao;

    private $url;   

    public function __construct($id = null, $nome = null, $descricao = null, $url = null)
    {
        $this->id           = $id;
        $this->nome         = $nome;
        $this->descricao    = $descricao;
        $this->url          = $url;
    }

    /**
     *
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     *
     * @param mixed $url            
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     *
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     *
     * @param mixed $descricao            
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

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
