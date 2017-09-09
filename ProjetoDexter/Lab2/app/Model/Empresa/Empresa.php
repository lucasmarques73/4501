<?php

class Empresa
{

    private $conteudo;

    private $tipo;

    private $titulo;


    /**
     *
     * @return the $conteudo
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     *
     * @return the $tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     *
     * @return the $titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }


    /**
     *
     * @param field_type $conteudo            
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;
    }

    /**
     *
     * @param field_type $tipo            
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     *
     * @param field_type $titulo            
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    
}
