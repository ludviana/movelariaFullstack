<?php 
    require_once('../conexoes/conexao.php');

    if(isset($_POST['nome']) && isset($_POST['ende']) && isset($_POST['tele']) && isset($_POST['qts']) && isset($_POST['nomeProd']) && isset($_POST['valorProd'])){

        $nome = $_POST['nome'];
        $endereco = $_POST['ende'];
        $telefone = $_POST['tele'];
        $quantidade = $_POST['qts'];
        $nome_produto = $_POST['nomeProd'];
        $valor_produto = $_POST['valorProd'];


        $slq_insert = "INSERT INTO pedidos(nomeCliente,endereco,telefone,nomeProduto,valorUnitario,quantidade) VALUES ('$nome','$endereco','$telefone','$nome_produto','$valor_produto','$quantidade');";

        $res = mysqli_query($conexao,$slq_insert);
        
        if($res){
            
?>
    <?php include_once('../includes/head.php');?>
    <style>
        body{
            text-align:center;
        }
        .desce{
            margin-bottom:240px;
        }
    </style>
    <title>Agradecemos</title>
    </head>

    <body>
            <h1>Obrigado por comprar com a MovelariaFullstack</h1>
            <h3 class="desce">Seu produto chegará em até 7 dias</h3>

    <?php include_once('../includes/footer.php');?>
<?php
        header("refresh:5 ; ../html/index.php");
        } else {
            echo "Falha no envio.";
        }


    } else {
        echo "algum campo vazio.";
    }
?>

