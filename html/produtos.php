    <?php include_once('../includes/head.php');
        
    ?>  
        <script src="../js/produtos.js" async></script>
        <link rel="stylesheet" type="text/css" href="../css/estiloprodutos.css">
        
        <title>Produtos</title>
    </head>
    
    <body>
        <!--Menu-->
<?php include_once('../includes/menu.php')?>
        <!--Fim do menu-->
        
    <hr>
    
    <?php 
        require_once('../conexoes/conexao.php');

        $sql_select = "SELECT * FROM produtos;";               
        $licacao = mysqli_query($conexao,$sql_select);
    ?>
        <?php
/*
idProduto int primary key not null auto_increment,
nome varchar(100),
descricao varchar(300),
preco decimal(8,2),
imagem varchar(300)
);*/

            $num = 0;
            $nome = [];
            $descricao = [];
            $preco = [];
            $imagem = [];
            $categoria = [];
            $idproduto = [];

            while($row = mysqli_fetch_assoc($licacao)){
                $num++;
                array_push($nome,$row['nome']);
                array_push($descricao,$row['descricao']);
                array_push($preco,$row['preco']);
                array_push($imagem,$row['imagem']);
                array_push($categoria,$row['categoria']);
                array_push($idproduto,$row['idProduto']);
            }

            
        ?>
        
        <!--Conteudo-->
        <section class="conteudo">
            <section class="lateral">
                <h3 >Categorias</h3>
                <ul>


                <?php  // afonso gostaria que desse um feedback sobre esse codigo em especifico, eu não sei se essa é a melhor opção para essa situação mas foi a forma que consegui ( o codigo pega os dados do banco de dados e faz um menu de filtro dinamico) Coloquei dois inserts no script de banco de dados para inserir dois produtos a mais só para fazer teste   desde ja agradeço (eles estao comentados para que nao atrapalhe na execução do projeto normal)?>

                    <li onclick="todos()" class="categorias">Todos (<?php echo $num; ?>)</li>

                    <?php 
                        $res = array_unique($categoria);
                        $cont = 0; 
                        while($cont < count($nome)){
                            if($res[$cont] <> null){
                    ?>

                    <li onclick="categ('<?php echo $nome[$cont];?>')" class="categorias">
                           
                        <?php echo $res[$cont];?> 
                        
                        <?php
                            echo "(".array_count_values($nome)[$nome[$cont]].")";
                        ?>
                    
                    </li>

                    <?php 
                            }
                    
                    $cont++; }?>
                </ul>
            </section>
                
            <section class="principal">

                <?php
                    $conta = 0;
                    while($conta < $num){
                        
                ?>
                
                <div class="produto" id="<?php echo $nome[$conta]?>">
                    <figure>
                        <img src="<?php echo $imagem[$conta] ?>" alt="<?php echo $descricao[$conta] ?>" title="<?php echo $descricao[$conta] ?>"> 
                    </figure>
                    <p> <?php echo $descricao[$conta]?></p>
                    <hr>
                    <p class="vermelho">R$ <?php echo $preco[$conta] ?></p>

                    <button class="botao" onmouseover="entrei()" onmouseout="sai()"><a href="../html/comprar.php?produto=<?php echo $idproduto[$conta]?>">Comprar</a></button>

                </div>

                <?php
                   $conta++; }
                ?>
            </section>

        </section>
        <!--Fim conteudo-->


    <hr>

        <!--Formas de pagamento-->
        <div class="pagamento">
            <h4>Formas de pagamento: </h4>
            <figure>
                <img src="../armarios/logo pagamento.jpg" alt="Formas de pagamento">
            </figure>
        </div>
        <!--Fim formas de pagamento-->

        <!--rodape-->
<?php include_once('../includes/footer.php')?>