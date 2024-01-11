<?php
    $valeurA = $_POST['chiffreA'];
    $valeurB = $_POST['chiffreB'];
    function addition($val1,$val2){
        $resultat = $val1 + $val2;
        return $resultat;
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
    <h1>Le résultat est <?php echo addition($valeurA, $valeurB)   ?></h1>
</body>

</html>