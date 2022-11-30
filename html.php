   <!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <ul>
        <?php //for ($i=0; $i < ; $i++) { 
            # code...
        //} ?>
    </ul>   

</body>
</html> -->

<?php

/*$recibe= $_POST["nombre"];
$recibe2= $_POST["apellido"];

$arre= [$recibe.$recibe2];

var_dump($arre);

echo "<br><br>";*/

$arra= [5,6,8,9,7,10,12,25,63];

for ($i=0; $i < count($arra) ; $i++) { 

if ($arra[$i]<20) {
    echo $arra[$i]."<br>";
}

}

?>