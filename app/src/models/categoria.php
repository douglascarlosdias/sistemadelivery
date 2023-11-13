<?php

class Categoria
{
    private $id;
    private $nome;
    private $descricao;
    private $nomeUrl;

    public function __construct($id, $nome, $descricao, $nomeUrl)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->nomeUrl = $nomeUrl;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
    
    public function getNomeUrl()
    {
        return $this->nomeUrl;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setNomeUrl($nomeUrl)
    {
        $this->nomeUrl = $nomeUrl;
    }
}
