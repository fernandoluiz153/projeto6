<!-- inclui cabeçalho php -->
<?php include_once'cabecalho.php';?>
    <div id="conteudoartigo">
       <h2>Artigos</h2>
       <?php 
// selecionando os dados no banco
    $sql = "select * from artigo";
    include_once'conexao.php';
    // executando no banco a conexão com a instrução de selecionar os artigos
   $result = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_array($result)) {        
       ?>
        <div class="artigo">
        <?php echo $row["titulo"]; ?></h4>
            <h5>Autor(a): <?php echo $row["autor"]; ?></h4>
            <img src="upload/<?php echo $row["foto"]; ?>"/>
        </div>
    </div>    
    <?php     
    
    }
    include_once'rodape.php';?>