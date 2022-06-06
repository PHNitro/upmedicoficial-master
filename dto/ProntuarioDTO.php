<?php

class ProntuarioDTO{

    private $idProntuario;
    private $numero;
    private $dataCriacao;
    private $ativo;
    private $relatorioMedico;
    private $medicoID;
    private $PacienteId;
  

    public function getIdProntuario()
    {
        return $this->idProntuario;
    }
    public function setIdProntuario($idProntuario)
    {
        $this->idProntuario = $idProntuario;
    }
    public function getNumero()
    {   
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

    }

    public function getdataCriacao()
    {
        return $this->dataCriacao;
    }

    public function setdataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;

    }

    public function getativo()
    {
        return $this->ativo;
    }
    
    public function setativo($ativo)
    {
        $this->ativo = $ativo;

    }

    public function getrelatorioMedico()
    {
        return $this->relatorioMedico;
    }

    public function setrelatorioMedico($relatorioMedico)
    {
        $this->relatorioMedico = $relatorioMedico;
    }
    public function getMedicoID()
    {
        return $this->MedicoID;
    }

    public function setMedicoId($medicoID)
    {
        $this->MedicoId = $medicoID;
    }
    public function getPacienteID()
    {
        return $this->PacienteID;
    }

    public function setPacienteID($PacienteId)
    {
        $this->PacienteId = $PacienteId;
    }

}  




