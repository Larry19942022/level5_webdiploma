<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
//function
function name(){
    echo "My name is Larry";
}
//call function
name();
echo"<br>";
?>

<?php
function add ($int1,$int2){
$sum=$int1 + $int2;

return $sum;
}
//parse 10 and 5 to the add function
echo "I am ";
echo add(10,11);
echo "years old";
echo "<br>";

//default values if no number is parse in
function add2 ($int1=10,$int2=10){
    $sum=$int1 + $int2;
    
    return $sum;
    }
//returns default 
   echo add2()." is my favorite number";
   echo"<br>";
//returns sum of 1 and 2
   echo add(1,2)." is my unlucky number";
?>

</body>
</html>