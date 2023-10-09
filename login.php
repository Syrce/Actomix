<!DOCTYPE html>
<html lang="pt-br">
<?php

?>


<?php
    if(isset($_POST['logar'])){

        $nome = $_POST['user'];
        $senha = $_POST['pass'];
      
        if($nome == ""){

        }else{
            if($senha == ""){

            }else{


                if($nome = "atomicx" && $senha = "argenis2023" ){

                    $script = "<script> window.location = 'dashboard.php';</script>";
                    echo $script;
                    exit;

                }
      
       

            }
        }

    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Atomic X</title>

    <link rel="stylesheet" href="css/loginStyle.css">

</head>

<body>

    <form action="" method="post">

        <h1>Atomic X</h1>

        <div class="login">

            <input type="text" name="user" placeholder="Username: ">
            <input type="text" name="pass" placeholder="Password: ">
            <p style="padding: 0px ; margin:0px;"><a href="https://wa.me/+573148486473">No Recuerda Su Clave ?</a> </p>
            <input name="logar" class="btn" type="submit" value="Login">

        </div>

    </form><br>

   
  


</body>

</html>