<?php

class EspecialidadeDTO{

    private $idEspecialidade;
    private $nome;

    public function getEspecialidadeId()
    {
        return $this->idEspecialidade;
    }
    public function setEspecialidadeId ($idEspecialidade)
    {
        $this->idEspecialidade = $idEspecialidade;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome ($nome)
    {
        $this->nome = $nome;
    }
}