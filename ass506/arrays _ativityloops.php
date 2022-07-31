<?php
//normal array
$places=["river","city","movies","Te awa"];

echo "i went to ".$places[0];
echo "<br>";
echo count ($places);
?>



<?php
// if statement converted to switch
$payment = "credit";
if(($payment == 'credit') || ($payment=='cash')){
    echo 'it will take three days to process';
    }
   
    elseif($payment == 'transfer'){
        echo 'you have selected transfer';
    }



?>
<?php
switch ($payment){
case 'credit':   
case 'cash':
    echo 'it will take four days to process';
    break;
case 'transfer':
    echo 'you have selected transfer';
    break;

    default:
    echo 'please select an option';
    break;
}

?>
<?php
//while loop echo i five times
$i=0;
while ($i <= 5) {
    echo 'i';
    $i++;
    echo "<br>";
}
//for loop increment by two
for ($i=1; $i<=10; $i++){

    echo $i+1;
    $i++;
    echo "<br>";
}

//foreach loop to print array
$students = ["michael","lorena","Laurence","john"];

foreach ($students as $value){
    echo $value;
    echo "<br>";
}
//for loop to print array
for ($i=0; $i<count($students); $i++){
    echo $students[$i];
    echo "<br>";
}

?>

<?php
//while loop even and odd numbers
$number=1;
while ($number<=10){

    if ($number % 2 == 0){
        echo $number ." is even";
    }
    else {
        echo $number . " is odd";
    } 

    $number++;
    echo"<br>";
}
     
?>
<?php
//associative arrays

$student_name=[
    "name"=>"laurence",
    "address"=> "hamilton",
    "phone"=>22334
];
foreach($student_name as $key => $value){

    if ($key=="address"){
        continue;
    }


    if ($key=="name"){
        continue;
        
    }

    echo $key ." has ". $value . "<br>";
}

?>

<?php
//for loop
for ($i = 0; $i < 5; $i++){
    if ($i >=3){
        break;
    }
    echo "loop number $i <br>";
}
?>
<?php
//multiplication loop
for ($i = 1; $i <= 10; $i++){
   // echo $i * 5;
echo "5 X ".$i."=".$i * 5;
echo "<br>";


}
?>
<?php

$i=1;

while ($i<=15){
if($i == 13){
    continue;
}
echo "sweet";
$i++;

}

?>
<?php





?>