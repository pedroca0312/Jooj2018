<?php

class Categoria
{
    private $id;
    private $nome;
    private $descricao;

    /**
     * @return mixed
     */

    public function __construct($id=null, $nome=null, $descricao=null)
    {
        $this->id = $id;
        $this->nome=$nome;
        $this->descricao=$descricao;
    }


    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
}