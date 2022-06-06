<?php
require_once 'conexao/Conexao.php';

class ProntuarioDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar( ProntuarioDTO $ProntuarioDTO) {
        try {
            $sql = "INSERT INTO "
                . "prontuario(id, numero, dataCriacao, ativo, relatorioMedico, MedicoID, PacienteID) "
                . "VALUES(id:,:numero,:dataCriacao,:ativo,:relatorioMedico, :MedicoID, :PacienteID) ";
            
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( ":numero", $ProntuarioDTO->getNumero() );
            $stmt->bindValue( ":ATIVO", $ProntuarioDTO->getativo() );
            $stmt->bindValue( ":relatorioMedico", $ProntuarioDTO->getrelatorioMedico() );
            $stmt->bindValue( ":dataCriacao", $ProntuarioDTO->getDataCriacao() );
            $stmt->bindValue( ":MedicoId", $ProntuarioDTO->getMedicoID() );
            $stmt->bindValue( ":PacienteId", $ProntuarioDTO->getPacienteID() );
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function update(ProntuarioDTO $ProntuarioDTO ) {
        try {
            $sql = "UPDATE prontuario SET "
                . "id=?, numero=?, data_criacao=?, ATIVO=?, PacienteID=?"
                . "WHERE id=?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $ProntuarioDTO->getIdProntuario() );
            $stmt->bindValue( 2, $ProntuarioDTO->getNumero() );
            $stmt->bindValue( 3, $ProntuarioDTO->getAtivo() );
            $stmt->bindValue( 5, $ProntuarioDTO->getDataCriacao() );
            $stmt->bindValue( 7, $ProntuarioDTO->getPacienteID() );
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $sql = "SELECT * FROM prontuario ";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $medico = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $medico;
        } catch ( PDOException $e ) {
            echo "Erro ao listar os prontuarios: ", $e->getMessage();
        }
    }

    public function deleteById($idProntuario){
        try {
            $sql = "DELETE FROM prontuario WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $idProntuario );
            return $stmt->execute();
        
        } catch (PDOException $e) {
            echo "Erro ao excluir", $e->getMessage();
    }
 }

}