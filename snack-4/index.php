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
        $classe = [
            [
                "nome" => "Fabio",
                "cognome" => "Forghieri",
                "voti" => [8,5,6,9]
            ],
            [
                "nome" => "Enzo",
                "cognome" => "Miccio",
                "voti" => [4,8,10,6]
            ],
            [
                "nome" => "Capitan",
                "cognome" => "Uncino",
                "voti" => [10,7,6,3]
            ]
        ];


        for($i=0; $i<count($classe) ; $i++){
            /* media dei voti */
            $media = array_sum($classe[x]['voti']) / count($classe[x]['voti']);
            /* stampo il tutto */
            echo "Name: {$classe[x]['nome'] ";
        }





    ?>
</body>
</html>