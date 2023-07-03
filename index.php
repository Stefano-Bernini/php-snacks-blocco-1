<?php 
    $matches = [
        [
            'teams' => 'Olimpia Milano - Virtus Bologna',
            'point' => '95-72'
        ],
        [
            'teams' => 'Derthona - Venezia',
            'point' => '84-61'
        ],
        [
            'teams' => 'Dinamo Sassari - Trento',
            'point' => '80-75'
        ],
        [
            'teams' => 'Brindisi - VL Pesaro',
            'point' => '108-78'
        ],
        [
            'teams' => 'Brescia - Scafati',
            'point' => '61-93'
        ],
        [
            'teams' => 'Universo treviso - Napoli',
            'point' => '82-89'
        ],
        [
            'teams' => 'Varese - Reggiana',
            'point' => '92-82'
        ],
        [
            'teams' => 'Trieste - Verona',
            'point' => '79-76'
        ],
   ]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PHP Snacks Blocco 1</title>
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <h1>Snack 1</h1>
                <p class="py-1"><?php foreach ($matches as $match) {
                    echo $match['teams']." | ".$match['point'].'<br>';
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>