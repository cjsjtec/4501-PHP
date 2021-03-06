<?php

namespace DexterApp\Admin\Models\Service;

use DexterApp\Admin\Models\Collection;
use DexterApp\Admin\Models\DataMapper;
use DexterApp\Admin\Models\Entity;

/**
 * Rotinas para lidar com funcionalidades
 */
class Funcionalidade
{

    private $funcionalidadeMapper;

    public function getFuncionalidade($funcionalidadeId)
    {
        // [Lab09] Fazendo CRUD de Funcionalidades
        $this->getFuncionalidadeMapper($funcionalidadeId);
    }

    public function getFuncionalidades()
    {
        // [Lab09] Fazendo CRUD de Funcionalidades
    }

    public function save(array $dados)
    {
        // [Lab09] Fazendo CRUD de Funcionalidades
    }

    public function getFuncionalidadeMapper()
    {
        // [Lab09] Fazendo CRUD de Funcionalidades

        if(!$this->funcionalidadeMapper) {
            $this->funcionalidadeMapper = new DataMapper\Funcionalidade();
        }
        return $this->funcionalidadeMapper->fetchById($funcionalidadeId);
    }

    public function setFuncionalidadeMapper(DataMapper\Funcionalidade $mapper)
    {
        // [Lab09] Fazendo CRUD de Funcionalidades
    }
}
