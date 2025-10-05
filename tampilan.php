<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/wisata/wisata.php");
$data = json_decode($send, TRUE);
?>

<html>
<head>
    <title>Data Wisata</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th {
            background-color: yellow;
        }
        th, td {
            padding: 8px;
            text-align: center;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Data Wisata</h2>
    <table>
        <tr>
            <th>KOTA</th>
            <th>LANDMARK</th>
            <th>TARIF</th>
        </tr>
        <?php
        if(is_array($data)){
            foreach($data as $row){
                echo "<tr>";
                echo "<td>".$row['kota']."</td>";
                echo "<td>".$row['landmark']."</td>";
                echo "<td>".$row['tarif']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Data tidak tersedia</td></tr>";
        }
        ?>
    </table>
</body>
</html>
