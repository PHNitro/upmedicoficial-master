<?php

class HistoricoDTO{

    private $idHistorico;
    private $data;
    private $peso;
    private $altura;
    private $temperatura;
    private $pressao;
    private $descricao;
    private $prontuarios_id;

    public function getIdHistorico()
    {
        return $this->idHistorico;
    }
    public function setIdHistorico ($idHistorico)
    {
        $this->idHistorico = $idHistorico;
    }
    public function getData()
    {
        return $this->data;
    }
    public function setData ($data )
    {
        $this->data = $data;
    }
    public function getPeso ()
    {
        return $this-> peso;
    }
    public function setPeso ($peso)
    {
        $this->peso = $peso;
    }
    public function getAltura ()
    {
        return $this->altura;
    }
    public function setAltura ($altura)
    {
        $this->altura = $altura;
    }
    public function getTemperatura()
    {
        return $this->temperatura;
    }
    public function setTemperatura ($temperatura)
    {
        $this->temperatura = $temperatura;
    }
    public function getPressao()
    {
        return $this->pressao;
    }
    public function setpressao ($pressao)
    {
        $this->pressao = $pressao;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao ($descricao)
    {
        $this->descricao = $descricao;
    }
    public function getProntuarios()
    {
        return $this->getProntuario;
    }
    public function setPronturios($prontuarios_id)
    {
        $this->prontuarios = $prontuarios_id ;
    }

}