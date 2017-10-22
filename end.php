<?php
    include 'config.php';
    $cfg = new Config();
    $conn = $cfg->GetConfig();

    if(isset($_POST['ref']) && isset($_POST['typeL'])){
        // Get Input
        $ref = $_POST['ref'];
        $typeL = $_POST['typeL'];

        $query = "UPDATE `lit` SET `typeLit`='$typeL' WHERE `ref` = '$ref'";
        $stmt = $conn->prepare($query);
        $res = $stmt->execute();
        if($res){
            header("Location:index.php");
        }else{
            echo "Error";
        }
    }
    
?>