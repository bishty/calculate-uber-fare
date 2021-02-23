<?php

include_once 'array.php';
include_once "FareCal.php";

if(isset($_POST['pick'])){


$pick=$_POST['pick'];
$drop=$_POST['drop'];
$cab=$_POST['cab'];
$luggage=$_POST['luggage'];
foreach(location as $key =>$value){
    if($key ==$pick)
    {
        $dist1=$value;
    }
}
foreach(location as $key =>$value){
    if($key ==$drop)
    {
        $dist2=$value;
    }
}
$total_dis=abs($dist1-$dist2);


$obj = new FareCal();
$object= $obj->fareCalculation($total_dis,$cab,$luggage);
echo "<h3>Pickup Location : " . $pick. "</h3>";
echo "<h3>Drop Location : " .$drop. "</h3>";
echo "<h3>Cab Type : ". $cab. "</h3>";
if($luggage>0){
echo "<h3>Luggage Weight : " .$luggage." Kg</h3>";
}
echo "<h3>Total Fare : ".$object. "</h3>";


}