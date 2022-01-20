<?php

require("includes/functions.php");
require("includes/dump_it.php");

$accounts = [];

$account = new Account(123456789, 10);
array_push($accounts, $account);

$account = new Account(987654321, 0);
array_push($accounts, $account);


foreach ($accounts as $account)
    echo "<p>$account->getAccountInfo()</p>";
    echo "<br>";
