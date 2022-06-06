<?php

class InternacaoDTO{

    private $idInternacao;
    private $descricao;
    private $idHistorico;

    public function getidInternacao()
    {
        return $this->idInternacao;
    }
    public function setidInternacao ($idInternacao)
    {
        $this->idInternacao = $idInternacao;
    }
    public function getdescricao()
    {
        return $this->descricao;
    }
    public function setdescricao ($descricao)
    {
        $this->descricao = $descricao;

    }
    public function getidHistorico()
    {
        return $this->idHistorico;
    }
    public function setIdHistorico ($idHistorico)
    {
        $this->IdHistorico = $idHistorico;
    }
}