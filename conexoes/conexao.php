<?php
    $servidor = 'localhost';
    $usuario  = 'root';
    $senha    = 'root';
    $banco    = 'moveis';

    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

    if(!$conexao){
        die("falha na conexão com o banco: ". mysqli_connect_error());
    }

    
?>
<?php
    if(isset($_POST['nome']) && isset($_POST['genero']) && isset($_POST['emaile']) && isset($_POST['telefone']) && isset($_POST['tipomensagem']) && isset($_POST['mensagem'])){
        
        $nome = $_POST['nome'];
        $genero = $_POST['genero'];
        $email = $_POST['emaile'];
        $telefone = $_POST['telefone'];
        $tipo = $_POST['tipomensagem'];
        $mensagem = $_POST['mensagem'];

        $slq_insert = "INSERT INTO comentarios(nome,genero,email,telefone,tipo,mensagem) VALUES ('$nome','$genero','$email','$telefone','$tipo','$mensagem');";

        mysqli_query($conexao,$slq_insert);
        
        header("location: ../html/contato.php");
    }

?>