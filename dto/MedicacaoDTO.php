<?php

class MedicacaoDTO{

    private $id;
    private $descricao;
    private $idHistorico;
   


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getDescricao()
    {   
        return $this->descricao;
    }

    public function setDescricao ($descricao)
    {
        $this->descricao = $descricao;

    }
    public function getIdHistorico()
    {   
        return $this->idHistorico;
    }

    public function setIdHistorico($IdHistorico)
    {
        $this->idHistorico = $IdHistorico;

    }
}