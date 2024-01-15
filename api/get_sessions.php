<?php include_once "db.php";
$movies=$Movie->all("where `ondate`>='$ondate' && `ondate`<='$today' && `sh`=1 order by rank");
foreach ($movies as $movie) {
   echo "<option value='{$movie['id']}'>{$movie['name']}</option>";
}