<?php session_start()?>
<?php 
    
  if(!isset($_SESSION['login'])){
    include('login.php');
    if(isset($_POST['Send'])){
        // echo 'Enviou o formulario';
        $user = 'aureliolk';
        $pass = 'lkb3t4kayn';
        $form_user = $_POST['user'];
        $form_pass = $_POST['pass'];
        if($user == $form_user && $pass == $form_pass){
          $url = 'htts://acos-global.com';
            techo "logado com sucesso";
            // // $_SESSION['login'] =  true;
            // header(sprintf('Location: %s', $url));
            // exit;
        }else{
            echo "senha não conferi";
        }
    }
  }else{
    include('home.php');
  }
?>

