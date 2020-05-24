<?php
$filename = "student.csv";
$fp = fopen($filename, "r");
flock($fp, LOCK_SH);
$headings = fgetcsv($fp);
while ($aLineOfCells = fgetcsv($fp)) {
  $records[] = $aLineOfCells;
}
flock($fp, LOCK_UN);
fclose($fp);
echo "<p>{$headings[3]}</p>";
echo "<p>{$records[0][0]}</p>";
?>