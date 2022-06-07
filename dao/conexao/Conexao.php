<?php

abstract class Conexao{

    private static $instance;

     public static function getInstance(){
         try {
            if(!isset(self::$instance)){
                self::$instance = new PDO ('mysql:host=127.0.0.1;dbname=upmedic', 'root', '');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$instance;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
     }
}
        ?>
        <?php
require_once '../dao/conexao/Conexao.php';

session_start();

if(isset($_POST['btn'])):
   $erros = array();
   $nome =  mysqli_escape_string($conexao, $_POST['crm']);
   $senha = mysqli_escape_string($conexao, $_POST['senha']);
  

  if(empty($nome) or empty($senha)):
    $erros[] = "<li> o campo login/senha precisa ser preenchido </li>";

  else:
     $sql = "SELECT nome FROM sistemateste WHERE nome = '$nome'";
     $resultado = mysqli_query($conexao, $sql);
     if(mysqli_num_rows($resultado) > 0):
      $senha = ($senha);

       
     $sql = "SELECT * FROM sistemateste WHERE nome = '$nome' AND senha = '$senha'";

     $resultado = mysqli_query($conexao,$sql);

     if(mysqli_num_rows($resultado) == 1):
      $dados = mysqli_fetch_array($resultado);
      mysqli_close($conexao);


      $_SESSION['logado'] = true;
      $_SESSION['id'] = $dados['id'];
      header("Location: logado.php");
     else:
      $erros[] = "<li> Usuario e senha nao conferem </li>"; 
     endif;

     else:
    
     $erros[] = "<li> Usuario inexistente </li>";

     endif;

     endif;

     endif;
?>
     }
}