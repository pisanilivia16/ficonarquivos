<?php 
 include("conexao.php");

 $email = $_POST["email"];
 $senha = $_POST["senha"];
 $connect = mysql_connect("localhost", "root", "", "cadastro");
 $query_select = "SELECT email FROM usuario WHERE email = "$email"";
 $select = mysqli_query($query_select, $connect);
 $array = mysql_fetch_array($select);
 $logarray = $array["email"];
 if($email =="" || $email == null){
   echo "<script language="javascript" type="text/javascript">
   alert ("O campo email deve ser preenchido"); window.location.href="Entrar.html";</script>";
 }

 else{
   if ($logarray == $email){
      echo "<script language="javascript" type="text/javascript">
      alert ("O email já está cadastrado"); window.location.href="Entrar.html";</script>";
      die();
   }else{
      $query = "INSERT INTO usuario (email, senha) VALUES ("$email", "$senha")";
      $inset = mysqli_query ($query, $connect);

      if ($insert){
         echo "<script language="javascript" type="text/javascript">
         alert ("Usuário cadastrado com sucesso!"); window.location.href="Funciona.html";</script>";
      }else{
         echo "<script language="javascript" type="text/javascript">
         alert ("Não foi possível cadastrar este usuário"); window.location.href="Entrar.html";</script>";
      }
   }
 }

?>