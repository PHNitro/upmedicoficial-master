<?php
require_once 'conexao/Conexao.php';

class InternacaoDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar( InternacaoDTO $InternacaoDTO) {
        try {
            $sql = "INSERT INTO "
                . " internacao(id, descricao, historico ) "
                . "VALUES(id:,:descricao, :historico )";

            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( ":id", $InternacaoDTO->getidInternacao() );
            $stmt->bindValue( ":nome", $InternacaoDTO->getIdHistorico() );
            
      
            
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function update( InternacaoDTO $InternacaoDTO ) {
        try {
            $sql = "UPDATE internacao SET "
                . "id=?, descricao=?, Medico-ID=?"
                . "WHERE Internacao=?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $InternacaoDTO->getidInternacao() );
            $stmt->bindValue( 2, $InternacaoDTO->getdescricao() );
            $stmt->bindValue( 2, $InternacaoDTO->getIdHistorico() );
           
           
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $sql = "SELECT * FROM internacao";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $Internacao = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $Internacao;
        } catch ( PDOException $e ) {
            echo "Erro ao listar os pacientes: ", $e->getMessage();
        }
    }

    public function deleteById($IdInternacao){
        try {
            $sql = "DELETE FROM internacao WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $IdInternacao );
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao excluir", $e->getMessage();
    }
 }
}