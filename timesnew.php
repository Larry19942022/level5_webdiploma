<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>times_table</title>
    <style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
  <H1>Times Tables</H1>


  <table style=background-color:yellow;>   

<?php
$one=1;
for ($y=1; $y<=12; ){
  
  echo"<td>";
for ($i=1; $i<=12; ){
  
  $result=$i * $one;
  
  echo $i;
  echo "X";
  echo  $one;
  echo "=";
  echo $result; 
  

  $i++;
  echo "<br>";
}
  echo "<br>";
$one++;
$y++;
echo"</td>";
}  
?>
</table>



</body>
</html>