<?php include_once('../includes/head.php');?> 

        <link rel="stylesheet" type="text/css" href="../css/comprar.css">
        <title>comprar</title>
    </head>
    
    <body>
        <!--Menu-->
<?php include_once('../includes/menu.php');?>
        <!--Fim do menu-->
        
    <hr> 
<?php require_once('../conexoes/conexao.php');?>

<?php 
    $id = $_GET['produto'];

    $sql_select = "SELECT * FROM produtos where idProduto = ".$id;

    $resposta = mysqli_query($conexao,$sql_select);

    $nome = [];
    $descricao = [];
    $preco = [];
    $imagem = [];

    if($resposta){
        while($row = mysqli_fetch_assoc($resposta)){
            array_push($nome,$row['nome']);
            array_push($descricao,$row['descricao']);
            array_push($preco,$row['preco']);
            array_push($imagem,$row['imagem']);
        }

    }
?>



    <div class="conteudo_comprar">
        
        <div class="esquerda_comprar">
        <?php for($i = 0; $i < count($nome); $i++){ ?>
            <div>
                <h3>Informações sobre produto</h3>
                <img src="<?php echo $imagem[$i]?>" alt="<?php echo $descricao[$i]?>">
                <div class="infor">
                    <div class="infor_esquerda">
                        <p>Descrição:</p>
                        <p><?php echo $descricao[$i]?></p>
                    </div>
                    <div class="infor_direita">
                        <p>Valor unitario:</p>
                        <p id="valor">R$ <?php echo $preco[$i]?></p>
                    </div>
                </div>
            </div>
        <?php }?>
        </div>
        <div class="direita_comprar">
            <h3>Preencha os dados para envio</h3> 
            <form action="../conexoes/enviado.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label for="nome">Digite seu nome: </label>
                        </td>
                        <td>
                            <input type="text" name="nome" id="nome">   
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ende">Endereço para entrega: </label>
                        </td>
                        <td>
                            <input type="text" name="ende" id="ende">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tel">Telefone para contato: </label>
                        </td>
                        <td>
                            <input type="tel" name="tele" id="tele" maxlength="11"> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="qts">Qts:</label>
                        </td>
                        <td>
                            <input type="number" name="qts" id="qts" min="1" value="1" maxlength="2"> 
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="nomeProd" value="<?php echo $descricao[0]?>">
                <input type="hidden" name="valorProd" value="<?php echo $preco[0]?>">
                

                <button class="botao" type="submit">Finalizar compra</button>
            </form>
        </div>
    </div>
        
        
       
<?php include_once('../includes/footer.php');?>