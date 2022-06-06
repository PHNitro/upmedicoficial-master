<?php
require_once 'conexao/Conexao.php';

class MedicosEspecialidadesDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar( MedicoEspecialidadeDTO $MedicoEspecialidadeDTO) {
        try {
            $sql = "INSERT INTO "
                . 'medicos_especialidades(medicos_id, especialidade)'
                . 'VALUES(medicos_id:,:especialidade_id)';
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( ':medico', $MedicoEspecialidadeDTO->getIdMedico() );
            $stmt->bindValue( ':medico, :especialidade', $MedicosEspecialidadeDTO->getEspecialidadeId() );
      
            
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function update( MedicoEspecialidadeDTO $MedicosEspecialidadesDTO ) {
        try {
            $sql = "UPDATE medicos_especialidades SET "
                . "medicos_id=?, especialidade_id=?"
                . 'WHERE medicos_id=?';
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $MedicosEspecialidadesDTO->getIdMedico() );
            $stmt->bindValue( 2, $MedicosEspecialidadesDTO->getEspecialidadeId() );
           
           
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $sql = "SELECT * FROM medicos_especialidades ";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $MedicosEspecialidades = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $MedicosEspecialidades;
        } catch ( PDOException $e ) {
            echo "Erro ao listar o medico: ", $e->getMessage();
        }
    }

    public function deleteById($IdMedicoEspecialidade){
        try {
            $sql = "DELETE FROM historico_id WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $IdMedicoEspecialidade );
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao excluir", $e->getMessage();
        }
    }
}
    