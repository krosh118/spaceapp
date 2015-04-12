<?php

include './conexion.php';

if(isset($_POST['inicio'])){
    
    $correo = filter_input(INPUT_POST, 'email');
    
    $password = filter_input(INPUT_POST, 'password');
    
    if(verificar_login($correo, $password, $result) == 1){
        
        $destino = "inicio.php";
        header("Location: $destino");
        
    }else{
        
        ?>
<html><head><meta charset="UTF-8"</head><body>
<?php
        
        echo 'Nombre de usuario inválido. <br><br> Será redireccionado automáticamente.</body></html>';
        
        // Redireccionamos
        echo '<script type="text/javascript">   
                function Redirect(){  
                    window.location="index.php"; 
                } 
                setTimeout(\'Redirect()\', 2000);   
            </script>';
        
    }
    
}else{
  
    $destino = "inicio.php";
    header("Location: $destino");
    
}

function verificar_login($correo, $password, &$result) {

    $sql = "SELECT * FROM usuario WHERE correo = '$correo' AND pass = '$password'";

    $rec = mysql_query($sql) or die(mysql_error());

    $count = 0;

    while ($row = mysql_fetch_object($rec)) {

        $count++;
        $result = $row;
        
    }

    if ($count == 1) {

        return 1;
    } else {

        return 0;
    }
}