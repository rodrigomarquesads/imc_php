<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $peso = floatval($_GET["peso"]);
        $altura = ($_GET["altura"]);

        if (strpos($altura, ',') !== false){
            $altura = floatval(str_replace(",",".", $altura));

        } else {
            $altura = floatval($altura);
        }

        $imc = round($peso / ($altura*$altura), 2);
        echo "IMC: $imc<br><br>";

        if ($imc < 17){
            $texto = "Muito abaixo do peso";
        } else if ($imc < 18.5){
            $texto = "Abaixo do peso";
        } else if ($imc < 25){
            $texto = "Peso normal";
        } else if ($imc < 30){
            $texto = "Acima do peso";
        } else if ($imc < 35){
            $texto = "Obesidade I";
        } else if ($imc < 40){
            $texto = "Obesidade II";
        } else {
            $texto = "Obesidade III";
        }

        echo "$texto<br><br>";
    ?>
    
</body>
</html>