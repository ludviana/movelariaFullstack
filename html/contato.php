<?php include_once('../includes/head.php') ?>
        <title>Contato</title>
    </head>

    <body >

        <!--Menu-->
<?php include_once('../includes/menu.php')?>
        <!--Fim do menu-->
    <div class="container-fluid text-center">
        <!--informaçoes de contato-->
        <section class="d-flex  mb-5">
            <div class="col-6">
                <figure>
                    <img src="../armarios/email2.png" width="40px">

                    <figcaption>
                        <h3> email@fullstack.com</h3>
                    </figcaption>
                </figure>
            </div>
            <div class="col-6">
                <figure>
                    <img src="../armarios/whats.png" width="40px">

                    <figcaption>
                        <h3 class="numero">(11)1111-2222</h3>
                    </figcaption>
                </figure> 
            </div>
        </section>
        <!--Fim informaçoes de contato-->

<?php require_once('../conexoes/conexao.php');?>

        <!--formulario-->
        <div>
            <main>
                <h2>Fale conosco</h2>
                
                    <form action="../conexoes/conexao.php" method="post" >
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome" >Nome:</label>
                                <input type="text" name="nome" id="nome" placeholder="Seu nome" class="form-control">
                        </div>    
                        <div class="form-group col-md-6">
                            <label for="emaile">Email: </label>
                                <input type="email" name="emaile" id="emaile" placeholder="email@fullstack.com" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <legend class="col-form-label ">Genero:</legend>
                        
                            <input type="radio" name="genero" id="genero" value="Feminino" >
                                <label for="genero">
                                    Feminino
                                </label>
                
                            <input type="radio" name="genero" id="genero" value="Masculino" >
                                <label  for="genero">
                                    Masculino
                                </label>        
                        
                            <input type="radio" name="genero" id="genero" value="Outro" >
                                <label for="genero">
                                    Outro
                                </label>
                                
                        </div>

                        <div class="form-group col-md-6">
                            <label for="telefone" class="col-form-label">Telefone: </label>
                                <input type="tel" name="telefone" id="telefone" placeholder="(00) 00000-0000" class=" form-control">
                        </div>
                    </div>    
                           
                    
                        <div class="form-group">
                            <label class=" col-form-label" for="tipomensagem">Tipo de mensagem: </label>
                            <select name="tipomensagem" id="tipomensagem" class="form-control">
                                <option value=""> </option>
                                <option value="Elogio">Elogio</option>
                                <option value="Informação"> Informação</option>
                                <option value="Reclamação">Reclamação</option>
                                <option value="Sugestão">Sugestão</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="mensagem">Mensagem: </label>
                                <textarea class="form-control" name="mensagem" id="mensagem" placeholder=" Deixe-nos sua mensagem aqui"></textarea>
                        </div>
                    
                    
                        <div>
                            <input class="btn btn-primary" type="submit" value="Enviar"> 
                        </div>

                    </form>
                </div>
            </main>
        </div>
        <!--fim formulario-->
<hr>
        <section class="table table-striped table-borderless">
            <table>
                <tr>
                    <th scope="col">N°msg</th>
                    <th scope="col">Nome Cliente</th>
                    <th scope="col">Tipo de msg</th>
                    <th scope="col">Mensagem</th>
                </tr>


<?php 
        
            $sql_select = "SELECT * FROM comentarios;";

            $res = mysqli_query($conexao,$sql_select);
            if($res){
                while($row = mysqli_fetch_assoc($res)){
              
?>
        
                <tr>
                    <td><?php echo $row['id_comentarios']?></td>
                    <td><?php echo $row['nome']?></td>
                    <td><?php echo $row['tipo']?></td>
                    <td><?php echo $row['mensagem']?></td>
                </tr>
            
<?php     

                }
            }  
?>
            </table>

        </section>
        
        <!--rodape-->
        <?php include_once('../includes/footer.php') ?>