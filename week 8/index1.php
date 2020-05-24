<?php
/*
<select name="...">
<?php
    $seasons = [
        'Autumm' => ['March', 'April', 'May'],
        'Winter' => ['June', 'July', 'August'],
        'Spring' => ['September', 'October', 'November'],
        'Summer' => ['December', 'January', 'Feburary']
    ];
    foreach ($seasons as $season => $months){
        echo "<optgroup label='$season'>";
        foreach ($months as $month){
            echo "<option value='$month'>$month</option>";
        }
        echo "</optgroup>";
    }
?>
</select>

<?php
$mid = 'dumbo';
    function moviePanel($mid){
        global $moviesObject;
        echo <<<"BLACKDIAMOND"
        <div id= 'panel_$mid'>
        <img src='../a3/photos/$mid.png'/>
        <h2>$movieObject[$mid]['title']
            $movieObject[$mid]['rating]</h2>
            <div class='screenings'>
    BLACKDIAMOND;
    foreach ($movieObject[$mid]['screenings'] as $day => $hour)
        echo "<div>$day - $hour </div>\n";
        echo "</div>";
    echo "</div>";
    }
    echo "$movieObject";
    moviePanel("dumbo");
?>
 */
?>
<?php
function isFullOrDiscount($day, $hour){
    switch ($day) {
        case 'MON';
        case 'TUE';
        case 'WED';
        case 'SUN';
        case 'FUN';
        switch ($hour){
            case 'T12';
            case 'T15';
            case 'T00';
            return 'discount';
            case 'T18';
            case 'T21';
            return 'full';
            default:
            return 'ERROR_hour NOT FOULD';
        }
}
$days = ['MON', 'TUE', 'WED', 'SUN', 'FUN'];
$hours = ['T12', 'T15', 'T18', 'T21', 'T00', 'T11'];

foreach ($days as $day){
    foreach ($hours as $hour){
        echo "<p>" . $day . $hour . ":" . isFullOrDiscount($day , $hour) . "</p>";
    }
}
?>