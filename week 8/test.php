<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--
Asume that movies on every 3 hours from 12pm to 12am.
Valid time should be T12, T15, T18, T21, T00.
Mon-Fri all time discount for T18 and T21
Sat $ Sun discount for only T00.
-->
<?php   function isFullOnlyDiscount($day, $hour){

}
$days = ['MON', 'TUE', 'WED', 'SUN', 'FUN'];
$hours = ['T12', 'T15', 'T18', 'T21', 'T00'];
foreach ($days as $day){
    foreach ($hours as $hour){
        echo "<p>".$day."$hour".": ".isFullOnlyDiscount($day.$hour)."</p>";
    }
}
?>
</body>
</html>