<?php include_once('../includes/head.php') ?>
        <link rel="stylesheet" href="../css/estilocontato.css">
        <title>Contato</title>
    </head>

    <body >

        <!--Menu-->
<?php include_once('../includes/menu.php')?>
        <!--Fim do menu-->
        
    <hr>
        
        <!--informaçoes de contato-->
        <section class="contato">
            <figure>
                <img src="../armarios/email2.png" id="email">

                <figcaption>
                    <h3> email@fullstack.com</h3>
                </figcaption>
            </figure>
        
            <figure>
                <img src="../armarios/whats.png" id="whats">

                <figcaption>
                    <h3 class="numero">(11)1111-2222</h3>
                </figcaption>
            </figure> 
        </section>
        <!--Fim informaçoes de contato-->


        <!--formulario-->
        <main class="formulario">
            <h2>Fale conosco</h2>
            
            <form action="" method="GET" autocomplete="off">
                <table>              
                    <tr>
                        <th>
                            <label for="nome">Nome: </label>
                        </th>
                        <td>
                            <input type="text" name="nome" id="nome" placeholder="Seu nome" class="larg">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="genero">Genero:</label>
                        </th>
                        <td >
                            <input type="radio" name="genero" id="genero">Feminino
                        
                            <input type="radio" name="genero" id="genero">Masculino
                        
                            <input type="radio" name="genero" id="genero">Outro
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="emaile">Email: </label>
                        </th>
                        <td>
                            <input type="email" name="emaile" id="emaile" placeholder="email@fullstack.com" class="larg">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="telefone">Telefone: </label>
                        </th>
                        <td>
                            <input type="tel" name="telefone" id="telefone" placeholder="(00) 00000-0000" class="larg">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="tipomensagem">Tipo:</label>
                        </th>
                        <td>
                            <select name="tipomensagem" id="tipomensagem" class="largo">
                                <option value="">Selecione um tipo de mensagem</option>
                                <option value="Elogio">Elogio</option>
                                <option value="Informação"> Informação</option>
                                <option value="Reclamação">Reclamação</option>
                                <option value="Sugestão">Sugestão</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="mensagem">Mensagem: </label>
                        </th>
                        <td>
                            <textarea name="mensagem" id="mensagem" placeholder=" Deixe-nos sua mensagem aqui"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2" class="botao">
                            <input type="submit" value="Enviar">
                        </th>
                    </tr>
                </table>
            </form>
        </main>
        <!--fim formulario-->

        
        <!--rodape-->
        <?php include_once('../includes/footer.php') ?>