<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php 
$matches = [
    [
        'homeTeam' =>'Acqua S.Bernardo Cantù',
        'pointsHomeTeam' => '101',
        'visitingTeam' =>'Allianz Pallacanestro Trieste',
        'pointsVT' => '96'
    ],
    [
        'homeTeam' =>'AIX Armani Exchange Milano',
        'pointsHomeTeam' => '110',
        'visitingTeam' =>'Banco di Sardegna Sassari',
        'pointsVT' => '89'
        
    ],
    [
        'homeTeam' =>'Carpegna Prosciutto Pesaro',
        'pointsHomeTeam' => '85',
        'visitingTeam' =>'De\'Longhi Treviso',
        'pointsVT' => '91'
    ],
    [
        'homeTeam' =>'Dolomiti Energia Trentino',
        'pointsHomeTeam' => '102',
        'visitingTeam' =>'Fortitudo Lavoropiù Bologna',
        'pointsVT' => '120'
    ],
    [
        'homeTeam' =>'Germani Brescia',
        'pointsHomeTeam' => '85',
        'visitingTeam' =>'Happy Casa Brindisi',
        'pointsVT' => '95'
    ],
    [
        'homeTeam' =>'Openjobmetis Varese',
        'pointsHomeTeam' => '81',
        'visitingTeam' =>'Umana Reyer Venezia',
        'pointsVT' => '65'
    ],
    [
        'homeTeam' =>'UNAHOTELS Reggio Emilia',
        'pointsHomeTeam' => '97',
        'visitingTeam' =>'Vanoli Basket Cremona',
        'pointsVT' => '98'
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP snack 1; PHP snack 2</title>
</head>
<body>
    <h1>25-02-21 SECONDA GIORNATA</h1>

    <p>
        <?php for ($i = 0; $i < count($matches); $i++){

            echo '<strong>SQUADRE:</strong> ' .$matches[$i]['homeTeam'].' - '.$matches[$i]['visitingTeam'].' | <strong>PUNTI:</strong> '.$matches[$i]['pointsHomeTeam'].' - '.$matches[$i]['pointsVT'] .'<br>';


        }

        ?></p>

<!-- count ( Countable | array $value , int $mode=COUNT_NORMAL ): int
Conta tutti gli elementi in un array o qualcosa in un oggetto. -->
</body>
</html>