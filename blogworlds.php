
<?php
  $data = json_decode(file_get_contents("php://input"), true);
  $existingData = json_decode(file_get_contents("blogworlds.json"), true);
  array_push($existingData, $data);
  $file = fopen("blogworlds.json", "w");
  fwrite($file, json_encode($existingData, JSON_PRETTY_PRINT));
  fclose($file);
  //echo "Data berhasil disimpan";
?>
