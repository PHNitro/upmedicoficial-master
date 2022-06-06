<?php
require_once 'conexao/Conexao.php';

class HistoricoDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar( HistoricoDTO $HistoricoDTO) {
        try {
            $sql = "INSERT INTO "
                . "medico(id, data, peso, altura, temperatura, pressao, descricao, IdProntuario) "
                . "VALUES(id:,:data, :peso, :altura, :temperatura, :pressao, :descricao, :IdProntuario,  )";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( ":id", $HistoricoDTO->getIdHistorico() );
            $stmt->bindValue( ":data", $HistoricoDTO->getData() );
            $stmt->bindValue( ":cpf", $HistoricoDTO->getPeso() );
            $stmt->bindValue( ":crm", $HistoricoDTO->getAltura() );
            $stmt->bindValue( ":email", $HistoricoDTO->getTemperatura() );
            $stmt->bindValue( ":pressao", $HistoricoDTO->getPressao() );
            $stmt->bindValue( ":descricao", $HistoricoDTO->getDescricao() );
            $stmt->bindValue( ":prontuarios_id", $HistoricoDTO->getProntuarios() );
            
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function update( HistoricoDTO $HistoricoDTO ) {
        try {
            $sql = " UPDATE historico prontuario_has_medico SET "
                . " PRONTUARIOS_ID=?, MEDICOS_ID=?, data_criacao=?, peso=?, altura=?, temperatura=?, pressao=?, descricao=? "
                . " WHERE idHistorico=? ";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $HistoricoDTO->getIdHistorico() );
            $stmt->bindValue( 2, $HistoricoDTO->getdata() );
            $stmt->bindValue( 3, $HistoricoDTO->getpeso() );
            $stmt->bindValue( 4, $HistoricoDTO->getaltura() );
            $stmt->bindValue( 5, $HistoricoDTO->gettemperatura() );
            $stmt->bindValue( 6, $HistoricoDTO->getpressao() );
            $stmt->bindValue( 7, $HistoricoDTO->getdescricao() );
            $stmt->bindValue( 8, $HistoricoDTO->get() );
           
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $sql = "SELECT * FROM historico prontuario_has_medico ";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $Historico = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $Historico;
        } catch ( PDOException $e ) {
            echo "Erro ao listar os pacientes: ", $e->getMessage();
        }
    }

    public function deleteById($idHistorico){
        try {
            $sql = "DELETE FROM historico prontuario_has_medico WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $idHistorico );
            return $stmt->execute();
            //code...
        } catch (PDOException $e) {
            echo "Erro ao excluir", $e->getMessage();
    }
 }

}