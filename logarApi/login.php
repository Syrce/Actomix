<?php



    $username = $_POST['user'];

    $password = $_POST['pass'];
    
    $dispositivo = $_POST['id'];
    
    $Vtoken = $_POST['token'];
    
    $rename = $username.".json";
    
    $diretorio = 'usuarios/'.$rename;

    if(file_exists('usuarios/'.$rename)){
    
        $file = file_get_contents($diretorio);
    
        $getData = json_decode($file,true);
    
        $senha = $getData['pass'];
    
        $celular = $getData['id'];
    
        $Vstts = $getData['status'];
    
        $Atoken = $getData['token'];

        $validade = $getData['validade'];
    
        if($senha == $password){
            if($celular == ""){

                $arr= array("user"=>$username, "pass"=>$password, "id"=>$dispositivo, "validade"=>$validade, "token"=>$username.$password, "status"=>$Vstts);
                $encript[] =  json_encode($arr);

                if(file_put_contents($diretorio,$encript)){

                    echo "logado sem celular";
    
                }else{
    
                    echo"Erro no servidor";
    
                }


            }else{

                if($celular == $dispositivo){
                    if($Vstts == "ATIVO" ){
                        if($Atoken == $Vtoken){
                            echo "logado com celular";
                        }else{
                            echo "Token invalido";
                        }
                    }else{
                        echo "Usuario Desactivado";
                       }
                }else{
                        echo "Dispositivo No Permitido";
                }
            }
        }else{
            echo "Password Incorrecto";  
        }

    }else{

        echo "Usuário não existe";
    }

?>