<?php   
session_start();

$priceObject = [
    'full' => [
        'SAT' => 19.8,
        'STP' => 17.5,
        'ACT' => 15.5,
    ],
    'discount' => [
        'SAT' => 18,
        'STP' => 16.5,
        'ACT' => 14,
    ]
];

function preShow( $arr, $returnAsString=false ) {
    $ret  = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
         return $ret;
   else 
        echo $ret; 


function php2js( $arr, $arrName ) {

    $lineEnd="";
    echo "<script>\n";
    echo "/* Generated with A4's php2js() function */";
    echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
    echo "</script>\n\n";

        }
};
?>