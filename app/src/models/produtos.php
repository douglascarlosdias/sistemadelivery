<?php

class Categoria
{
    private $id;
    private $nome;
    private $descricao;
    private $valor;
    private $categoria;
    private $imagem;

    public function __construct($id, $nome, $descricao, $valor, $categoria, $imagem)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->categoria = $categoria;
        $this->imagem = $imagem;
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
    
    public function getValor()
    {
        return $this->valor;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getImagem()
    {
        return $this->imagem;
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

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

}
