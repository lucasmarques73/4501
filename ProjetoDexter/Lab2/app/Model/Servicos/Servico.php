<?php
namespace app\Model\Servicos;

use lib\Db\AbstractEntity;

class Servico extends AbstractEntity
{

    private $nome;

    private $descricao;

    private $urlIcone;

    private $home;

    /**
     *
     * @return the $nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     *
     * @return the $descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     *
     * @return the $urlIcone
     */
    public function getUrlIcone()
    {
        return $this->urlIcone;
    }

    /**
     *
     * @return the $home
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     *
     * @param field_type $nome            
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     *
     * @param field_type $descricao            
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     *
     * @param field_type $urlIcone            
     */
    public function setUrlIcone($urlIcone)
    {
        $this->urlIcone = $urlIcone;
    }

    /**
     *
     * @param field_type $home            
     */
    public function setHome($home)
    {
        $this->home = $home;
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