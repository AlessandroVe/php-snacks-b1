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
        $partite = [
            [
                'casa'=> 'olimpia milano',
                'ospite'=> 'cantu',
                'casaPunti'=> 55,
                'ospitePunti' => 60
            ],
            [
                'casa'=> 'virtus bologna',
                'ospite'=> 'virtus roma',
                'casaPunti'=> 40,
                'ospitePunti' => 30
            ],
            [
                'casa'=> 'F.C matera',
                'ospite'=> 'inter',
                'casaPunti'=> 55,
                'ospitePunti' => 1
            ]
        ];

        for($i = 0; $i < count($partite); $i++){
            $string = " {$partite[$i]['casa']} -{$partite[$i]['ospite']} | {$partite[$i]['casaPunti']} - {$partite[$i]['ospitePunti']} <br>";
            echo $string;
        }

    ?>
</body>
</html>