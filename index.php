<?php 
$games = [
    $gameOne = [
        "homeTeam"=> "Chicago Bulls",
        "awayTeam"=> "Denver Nuggets",
        "homePoints"=> "95",
        "awayPoints"=> "104",
    ],
    $gameTwo = [
        "homeTeam"=> "Golden State Warriors",
        "awayTeam"=> "Boston Celtics",
        "homePoints"=> "114",
        "awayPoints"=> "113",
    ],
    $gameThree = [
        "homeTeam"=> "Los Angeles Lakers",
        "awayTeam"=> "Phoenix Suns",
        "homePoints"=> "88",
        "awayPoints"=> "98",
    ],
    $gameFour = [
        "homeTeam"=> "Miami Heat",
        "awayTeam"=> "Toronto Raptors",
        "homePoints"=> "101",
        "awayPoints"=> "96",
    ]
];

if (isset($_GET["name"])&& ($_GET["email"]) && ($_GET["age"])){
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="p-4">NBA Games</h1>
    <?php foreach ($games as $game){
    ?>
    <div class="card m-2 w-50 text-center">
        <div class="card-header">
            <?php echo $game["homeTeam"] . " - " . $game["awayTeam"]; ?>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $game["homePoints"] . " - " . $game["awayPoints"]; ?>
            </h5>
        </div>
    </div>
    <?php }?>;
    <h1 class = "mt-4 p-4">Name, email and age</h1>
        <form class="row px-4 gy-2 gx-3 align-items-center" action="index.php" method="GET">
            <div class="col-auto">
                <label>Name</label>
                <input type="text" class="form-control" name = "name">
            </div>
            <div class="col-auto">
                <label>Email</label>
                <input type="text" class="form-control" name = "email">
            </div>
            <div class="col-auto">
                <label>Age</label>
                <input type="number" class="form-control" name = "age">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        
        <div class= "p-4">
        <?php if (!empty($name) && !empty($email) && !empty($age)){ ?>
            <div class="card w-25">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $name ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $email ?></h6>
                    <p class="card-text"><?php echo $age ?></p>
                </div>
            </div>
            <?php 
                if (strlen($name)> 3 && strpos($email, "." && strpos($email, "@") !== false) && is_numeric($age)){
            ?>
                <div class="alert alert-success w-25" role="alert">
                    Accesso Riuscito
                </div>
            <?php } else{ ?>
                <div class="alert alert-danger w-25" role="alert">
                    Accesso Negato
                </div>
            <?php } ?>
        <?php } ?>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>