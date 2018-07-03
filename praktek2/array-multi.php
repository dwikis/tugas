<?php
$data = array(
    "web-prog" => array(
        "dwiki" => 7,
        "aldi" => 8,
        "eko" => 6
    ),
    "kalkulus" => array(
        "eko" => 9,
        "aldi" => 8,
        "dewi" => 5
    )
);
echo "Nilai web-prog untuk Aldi : " 
  .$data["web-prog"]["aldi"] . "<br>";
echo "Nilai Kalkulus untuk dewi : " 
   .$data["kalkulus"]["dewi"];
?>