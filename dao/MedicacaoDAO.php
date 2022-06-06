<?php
require_once 'conexao/Conexao.php';

class MedicacaoDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar( MedicacaoDTO $MedicacaoDTO) {
        try {
            $sql = " INSERT INTO "
                . "medicacao(id, nome) "
                . "VALUES(:id,:nome)";

            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( ":id", $MedicacaoDTO->getId() );
            $stmt->bindValue( ":descricao", $MedicacaoDTO->getDescricao() );
            $stmt->bindValue( ":IdHistorico", $MedicacaoDTO->getIdHistorico() );
      
            
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function update( MedicacaoDTO $MedicacaoDTO ) {
        try {
            $sql = "UPDATE medicacao SET "
                . "id=?, nome=?"
                . "WHERE medicacao=?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $MedicacaoDTO->getId() );
            $stmt->bindValue( 2, $MedicacaoDTO->getdescricao() );
            $stmt->bindValue( 2, $MedicacaoDTO->getIdHistorico() );
           
           
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $sql = "SELECT * FROM medicacao ";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $IdMedicacao = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $IdMedicacao;
        } catch ( PDOException $e ) {
            echo "Erro ao listar medicacao: ", $e->getMessage();
        }
    }

    public function deleteById($IdMedicacao){
        try {
            $sql = "DELETE FROM medicacao WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $IdMedicacao );
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao excluir", $e->getMessage();
    }
 }
}