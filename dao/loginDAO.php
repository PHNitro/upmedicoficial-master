<?php
require_once 'conexao/Conexao.php';

class LoginDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function findByCrmSenha( $crm, $senha ) {
        try {
            $sql = "SELECT * FROM medico " .
                "WHERE crm =? AND senha =?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $crm );
            $stmt->bindValue( 2, $senha );
            $stmt->execute();
            $login = $stmt->fetch( PDO::FETCH_ASSOC );
            return $login;
        } catch ( PDOException $e ) {
            echo "Erro ao buscar o login {$e->getMessage()}";
        }
    }
}