<?php

class MedicoDTO{

    private $id;
    private $nome;
    private $datanascimento;
    private $email;
    private $password;
    private $celular;
    private $cpf;
    private $crm;
    private $especialidade;


    public function getId()
    {
        return $this->nome;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNome()
    {   
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

    }

    public function getData()
    {
        return $this->datanascimento;
    }
    
    public function setData($datanascimento)
    {
        $this->datanascimento = $datanascimento;

    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
    }
    
    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCrm()
    {
        return $this->crm;
    }

   
    public function setCrm($crm)
    {
        $this->crm = $crm;

    
    }

    public function getEsp()
    {
        return $this->especialidade;
    }

    public function setEsp($especialidade)
    {
        $this->especialidade = $especialidade;

    }

}