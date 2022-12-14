<?php include_once'./cabecalho.php';?>
    <h1>Cadastro de Artigo</h1>
    <hr>

    <form action="gravar.php" method="post" >
    Titulo: <br>
    <input type="text" name="titulo" id="" placeholder="Digite o titulo ao Artigo" required="required"/>
    <br><br>
    Autor: <br>
    <input type="text" name="titulo" id="" placeholder="Digite o nome do autor" required="required"/>
    <br><br>
    Artigo: <br>
    <textarea name="artigo" id="" cols="30" rows="10" placeholder="Digite aqui..."></textarea>
    <br> <br>
    Foto: <br>
    <input type="file" name="foto" required="required" id=""/>

    <input type="submit" value="Enviar Artigo">

    </form>
</body>
</html>