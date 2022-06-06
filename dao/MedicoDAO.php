<?php
require_once 'conexao/Conexao.php';

class MedicoDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar( MedicoDTO $medicoDTO) {
        try {
            $sql = "INSERT INTO medico( nome, datanascimento, email, password, cpf, crm, especialidade) VALUES(:nome, :datanascimento, :email, :password, :cpf, :crm, :especialidade)";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( ":nome", $medicoDTO->getNome() );
            $stmt->bindValue( ":datanascimento", $medicoDTO->getData() );
            $stmt->bindValue( ":email", $medicoDTO->getEmail() );
            $stmt->bindValue( ":password", $medicoDTO->getPassword() );
            $stmt->bindValue( ":cpf", $medicoDTO->getCpf() );
            $stmt->bindValue( ":crm", $medicoDTO->getCrm() );
            $stmt->bindValue( ":especialidade", $medicoDTO->getEsp() );

            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar medico: ", $e->getMessage();
        }
    }

    public function update( MedicoDTO $medicoDTO ) {
        try {
            $sql = "UPDATE medico SET "
                . 'nome=?, datanascimento=?, email=?, password=?, celular=?, cpf=?, crm=?, especialidade=? '
                . 'WHERE id=?';
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $medicoDTO->getNome() );
            $stmt->bindValue( 2, $medicoDTO->getData() );
            $stmt->bindValue( 3, $medicoDTO->getEmail() );
            $stmt->bindValue( 4, $medicoDTO->getPassword() );
            $stmt->bindValue( 5, $medicoDTO->getCelular() );
            $stmt->bindValue( 6, $medicoDTO->getCpf() );
            $stmt->bindValue( 7, $medicoDTO->getCrm() );
            $stmt->bindValue( 8, $medicoDTO->getEsp() );
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar medico: ", $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $sql = "SELECT * FROM medico ";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $medico = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $medico;
        } catch ( PDOException $e ) {
            echo 'Erro ao atualizar o medico: ', $e->getMessage();
        }
    }

    public function deleteById($idmedico){
        try {
            $sql = "DELETE FROM medico WHERE id = ? ";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $idmedico );
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao excluir medico: ", $e->getMessage();
    }
 }

    public function logar(MedicoDTO $medicoDTO){
        try {
            $sql = "SELECT * FROM medico WHERE (email = :campo OR crm = :campo or cpf = :campo) AND password = :senha";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':campo', $medicoDTO->getCrm());
            $stmt->bindValue(':senha', $medicoDTO->getPassword());
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

}