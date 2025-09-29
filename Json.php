<?php

$json = '{
    "id": 8743,
    "nama": "budi",
    "umur": 36,
    "agama": "Islam",
    "pekerjaan": "Nganggur",
    "status": "Sudah kawin"
}';
echo "##PHP Object";
echo "<br>";
$obj = json_decode($json);
echo $obj->id;
echo "<br>";
echo $obj->nama;
echo "<br>";
echo $obj->umur;
echo "<br>";
echo $obj->agama;
echo "<br>";
echo $obj->pekerjaan;
echo "<br>";
echo $obj->status;

echo "<br>";
echo "##PHP Array";
echo "<br>";
$arr = json_decode($json, true);
echo $arr['id'];
echo "<br>";
echo $arr['nama'];
echo "<br>";
echo $arr['umur'];
echo "<br>";
echo $arr['agama'];
echo "<br>";
echo $arr['pekerjaan'];
echo "<br>";
echo $arr['status'];
?>