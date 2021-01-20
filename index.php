<?php session_start()?>
<?php 
  if(!isset($_SESSION["login"])){
    if(isset($_POST["Send"])){
        // echo "Enviou o formulario";
        $user = "aureliolk";
        $pass = "142536";
        $form_user = $_POST["user"];
        $form_pass = $_POST["pass"];
        if($user == $form_user && $pass == $form_pass){
          header("Location: home.php");
        }else{
            echo "senha não conferi";
        }
    }
    include('login.php');
  }else{
    include("home.php");
  }
?>

