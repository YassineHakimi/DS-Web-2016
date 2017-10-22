<?php
    include 'config.php';
    $cfg = new Config();
    $conn = $cfg->GetConfig();

    if(isset($_POST['ref']) && isset($_POST['cat']) && isset($_POST['dims']) && isset($_POST['bois'])){
        // Get Input
        $ref = $_POST['ref'];
        $cat = $_POST['cat'];
        $dims = $_POST['dims'];
        $bois = $_POST['bois'];

        $query = "INSERT INTO `lit`(`ref`, `categorie`, `dimensions`, `bois`) VALUES ('$ref','$cat','$dims','$bois')";
        $stmt = $conn->prepare($query);
        $res = $stmt->execute();
        if($res){
            header("Location:etape2.php?q=$ref");
        }else{
            echo "Error";
        }
    }
    
?>