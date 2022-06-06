<?php
require_once 'conexao/Conexao.php';

class PacienteDAO{
    private $pdo;
 
    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar( PacienteDTO $pacienteDTO) {
        try {
            $sql = 'INSERT INTO paciente(nome, data_nascimento, telefone, email, situacao, cpf, cep) VALUES(:nome, :data_nascimento,  :telefone, :email, :situacao, :cpf, :cep)';

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':nome', $pacienteDTO->getNome());
            $stmt->bindValue(':data_nascimento', $pacienteDTO->getData());
            $stmt->bindValue(':email', $pacienteDTO->getEmail());
            $stmt->bindValue(':telefone', $pacienteDTO->getTelefone());
            $stmt->bindValue(':situacao', $pacienteDTO->getSituacao()); 
            $stmt->bindValue(':cpf', $pacienteDTO->getCpf());  
            $stmt->bindValue(':cep', $pacienteDTO->getCep());     

            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo 'Erro ao cadastrar: ', $e->getMessage();
        }
    }

    public function update( PacienteDTO $pacienteDTO ) {
        try {
            $sql = 'UPDATE paciente SET nome = ?, data_nascimento = ?, telefone = ?, email = ?, situacao = ?, cpf = ?, cep = ? WHERE id = ?';
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $pacienteDTO->getNome() );
            $stmt->bindValue( 2, $pacienteDTO->getData() );
            $stmt->bindValue( 3, $pacienteDTO->getTelefone() );
            $stmt->bindValue( 4, $pacienteDTO->getEmail() );
            $stmt->bindValue( 5, $pacienteDTO->getSituacao() );
            $stmt->bindValue( 6, $pacienteDTO->getCpf() );
            $stmt->bindValue( 7, $pacienteDTO->getCep() );
            $stmt->bindValue( 8, $pacienteDTO->getId() );

            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo 'Erro ao cadastrar: ', $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $sql = 'SELECT * FROM paciente';
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $paciente = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $paciente;
        } catch ( PDOException $e ) {
            echo 'Erro ao atualizar o paciente: ', $e->getMessage();
        }
    }

    public function deleteById($idPaciente){
        try {
            $sql = 'DELETE FROM paciente WHERE id = ?';
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $idPaciente );
            return $stmt->execute();
        } catch (PDOException $e) {
            echo 'Erro ao excluir um paciente', $e->getMessage();
    }
 }

 public function findById($id) {
    try {
        $sql = 'SELECT * FROM paciente WHERE id = ?';
        $stmt = $this->pdo->prepare( $sql );
        $stmt->bindValue( 1, $id );
        $stmt->execute();
        $paciente = $stmt->fetch( PDO::FETCH_ASSOC );
        return $paciente;
    } catch ( PDOException $e ) {
        echo 'Erro ao listar um paciente: ', $e->getMessage();
    }
}

}