<?php

namespace DexterApp\Admin\Models\Entity;

use DexterApp\Front\Models\AbstractEntity;

class Funcionalidade extends AbstractEntity
{
    private $funcionalidadeId;
    private $imagem;
    private $titulo;
    private $descricao;

    public function getId()
    {
        // [Lab09] Fazendo CRUD de Funcionalidades
        return $this->funcionalidadeId;
    }

    public function setId($funcionalidadeId)
    {
        // [Lab09] Fazendo CRUD de Funcionalidades
        if(!is_int($funcionalidadeId)) {
            throw new \InvalidArgumentException('ID tem que ser inteiro');
        }
        $this->funcionalidadeId = $funcionalidadeId;
        return $this;
    }

    public function getImagem()
    {
        // [Lab09] Fazendo CRUD de Funcionalidades
        return $this->imagem;
    }

    public function setImagem($imagem)
    {
        // [Lab09] Fazendo CRUD de Funcionalidades
        if(!preg_match("@\.(?:jp(e)?g|png|gif|bmp)$@", $imagem)) {
            throw new \InvalidArgumentException('IMAGEM deve ter extensão: jpg, jpeg, png ou gif');
        }
        $this->imagem = $imagem;
        return $this;
    }

    public function getTitulo()
    {
        // [Lab09] Fazendo CRUD de Funcionalidades
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        // [Lab09] Fazendo CRUD de Funcionalidades
        if(strlen($titulo) > 50) {
            throw new \InvalidArgumentException('TITULO tem que ter no máximo 50 caracteres');
        }

        $this->titulo = $titulo;
        return $this;
    }

    public function getDescricao()
    {
        // [Lab09] Fazendo CRUD de Funcionalidades
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        // [Lab09] Fazendo CRUD de Funcionalidades
        $this->descricao = $descricao;
        return $this;
    }
}
