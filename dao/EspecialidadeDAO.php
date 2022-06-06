<?php
require_once 'conexao/Conexao.php';

class EspecialidadeDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar( EspecialidadeDTO $EspecialidadeDTO) {
        try {
            $sql = "INSERT INTO "
                . "especialidades(id, nome, clinico geral, cirurgiao geral ) "
                . "VALUES(id:, :nome, :clinica medica, :cirurgiao geral )";

            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( ":id", $EspecialidadeDTO->getEspecialidadeId() );
            $stmt->bindValue( ":nome", $EspecialidadeDTO->getNome() );
      
            
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar!: ", $e->getMessage();
        }
    }

    public function update( EspecialidadeDTO $EspecialidadeDTO ) {
        try {
            $sql = "UPDATE especialidade SET "
                . "id=?, nome=?"
                . "WHERE especialidade=?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $EspecialidadeDTO->getEspecialidadeId() );
            $stmt->bindValue( 2, $EspecialidadeDTO->getNome() );
           
           
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $sql = "SELECT * FROM especialidade";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $Especialidade = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $Especialidade;
        } catch ( PDOException $e ) {
            echo "Erro ao listar especialidade: ", $e->getMessage();
        }
    }

    public function deleteById($IdEspecialidade){
        try {
            $sql = "DELETE FROM especialidade WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $Especialidade );
            return $stmt->execute();
            
        } catch (PDOException $e) {
            echo "Erro ao excluir especialidade", $e->getMessage();
    }
 }
}