<?php 
    include_once("conexao.php");
    $codigo = $_POST['codigo'];
    if($codigo > 0){
        $checkRecord = mysqli_query($conexao,"SELECT * FROM usuarios WHERE codigo=".$codigo);
        $totalrows = mysqli_num_rows($checkRecord);
        if($totalrows > 0){
            $query = "DELETE FROM usuarios WHERE codigo=".$codigo;
            mysqli_query($conexao,$query);
            echo 1;
            exit;
        }
    }
echo 0;
exit;
?>
