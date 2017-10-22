<?php
    include 'config.php';
    $cfg = new Config();
    $conn = $cfg->GetConfig();

    $Query = "SELECT * FROM lit;";
    $l = $conn->query($Query);
    $res = $l->fetchAll();

    echo "<table border='1'>";
    echo "<th>Ref</th>";
    echo "<th>Catégorie</th>";
    echo "<th>Dimensions</th>";
    echo "<th>Type bois</th>";
    echo "<th>Type lit</th>";
    foreach($res as $r){
        echo "<tr>";
        echo "<td>$r[0]</td>";
        echo "<td>$r[1]</td>";
        echo "<td>$r[2]</td>";
        echo "<td>$r[3]</td>";
        echo "<td>$r[4]</td>";
        echo "</tr>";
    }
    echo "</table>";
?>