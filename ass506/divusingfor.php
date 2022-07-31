<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .list-item{
        background-color:gray;
        border: 1px dotted green;
        
    }
    </style>
</head>
<body>
    <div style = "border:1px solid blue;">
    <h1>This is the list</h1>

<?php
for ($i=1; $i<=10; $i++){ ?>
<div class = "list-item">
<h1>This is div number <?php echo $i ?></h1>
<p> these are divs repeated using a while loop</p>

</div>

<?php } ?>





</div>
</body>
</html>