<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="afficheResultat.php" method="GET">
        <!--step est utilisé dans le cas ou on avance par la valeur de step-->
        <input type="number" name="annee" step="0.01">
        <input type="number" name="annee_age" step="0.01">
        <input type="submit" value="Calcules">
    </form>
</body>

</html>