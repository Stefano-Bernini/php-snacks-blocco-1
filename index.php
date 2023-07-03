<?php 
    // SNACK 1
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
    ];
    

    // SNACK 2
    $snack2_login = false;
    
   if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])){
        $snack2_login = true;
        
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        
        $approved = false;
        if(strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age)){
            $approved = true;
        }
    }
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
            <!-- SNACK 1 -->
            <div class="col">
                <h1>Snack 1</h1>
                <p class="py-1">
                    <?php foreach ($matches as $match) {
                        echo $match['teams']." | ".$match['point'].'<br>';
                    }
                    ?>
                </p>
            </div>
            <hr>
            <!-- SNACK 2 -->
            <div class="col">
                <h1>Snack 2</h1>
                <form action="" method="GET">
                    <label for="name">Nome:</label> <br>
                    <input type="text" id="name" name="name" required>

                    <div class="py-4">
                        <label for="mail">E-mail:</label> <br>
                        <input type="email" id="mail" name="mail" required>
                    </div>

                    <label for="age">Eta':</label> <br>
                    <input type="text" id="age" name="age" required> <br>
                    <button class="my-2" type="submit" value="send_data">Invia</button>
                </form>
                <h1>
                    <?php 
                        if($snack2_login) {
                            echo $approved ?  "Accesso Riuscito":"Accesso Negato";
                        }
                    ?>
                </h1>
            </div>
        </div>
    </div>
</body>
</html>