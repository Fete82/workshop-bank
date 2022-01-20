<?php

require("includes/functions.php");
require("includes/dump_it.php");

$accounts = [];

$account = new Account(123456789, 10);
$account->deposit(10);
//Rekt
$account->withdraw(5000);
array_push($accounts, $account);

$account = new Account(987654321, 0);
$account->deposit(4000);
array_push($accounts, $account);

//Dumps info on top, because clarity.
//Dump::pre($accounts);


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="primary">
                <div class="logo">
                    <div><h1>Edbank</h1></div>
                    <div id="logo-image"><img src="images/swblg.png" width=50px height=auto;></div>
                </div>
                <div>
                    <?php
                    
                    foreach ($accounts as $account) {
                        echo "<p>{$account->getAccountInfo()}</p>";
                        echo "<br>";
                    }
?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>