<?php 
$annee = $_GET['annee'];
$annee_age = $_GET['annee_age']; 

function calcule_total($valeur1, $valeur2) {
    $total = $valeur1 + $valeur2 ;
    echo $total;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php  calcule_total($annee,$annee_age)  ?>



</body>

</html>