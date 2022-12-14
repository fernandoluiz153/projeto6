<?php 

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$artigo = $_POST["artigo"];
$foto = $_FILES["foto"];  // array


echo "Título :".$titulo."<br><br>";
// echo var_dump($foto);
/*
echo"Título ".$titulo ."<br/>";
echo"autor ".$autor."<br/>";
echo"<br><br>";
echo var_dump($foto);
array(5) { 
    ["name"]=> string(15) "Flores17_GF.jpg"   [nome.extensao]
    ["type"]=> string(10) "image/jpeg" 
    ["tmp_name"]=> string(24) "C:\xampp\tmp\phpDF5B.tmp"
    ["error"]=> int(0) 
    ["size"]=> int(133253) }*/

    $ext = explode(".",$foto["name"]);

    // $ext =     0              1

    //$ext = [Flores17_GF]     [jpg]

    $ext = $ext[1];

    if (($ext != "jpg") && ($ext != "jpeg") && ($ext != "png") && ($ext != "gif")) {
        echo " Só aceitamos arquivos de imagem este tipo de arquivo é inválido.";
    } elseif($foto["size"] > 1024 * 800){
        echo "Tamanho excedido!";
    }else{

        include_once'conexao.php';




    
     $nomefoto = date("YmdHis").rand(0000,9999).".".$ext;

    $sql = "insert into artigo values(null,'".$titulo."','".$autor."','".$artigo."','".$nomefoto."');";

   if( mysqli_query($con,$sql));{

    echo" Gravado com sucesso";

   }else{
    echo" Erro ao gravar";
   }

    }

   

    









    
    
      

     
     
    //if(mysqli_query($con,$sql)){
 
     //echo" Gravado com sucesso";
      //  move_uploaded_file($foto["tmp_name"],"./upload/".$nomefoto);
    

    //}else{

    //    echo" Erro ao gravar";

    //}
      //  mysqli_close($con);
       

    
