<?php

class MedicosEspecialidadesDTO{

    private $medicos_id;
    private $especialidade_id;
   

    public function getIdMedico()
    {
        return $this->medicos_id;
    }
    public function setIdMedico($idmedico)
    {
        $this->medico = $idmedico;
    }
    public function getEspecialidadeId()
    {
        return $this->especialidade_id;
    }
    public function setEspecialidadeId($idEspecialidade)
    {
        $this->especialidade = $idEspecialidade;
    }
}