<?php
$json_sample = [
  "title" => "Jsonサンプル",
  "item" => [
    "りんご",
    "みかん"
  ]
  ];

$json = json_encode($json_sample, JSON_UNESCAPED_UNICODE);
echo $json;
?>