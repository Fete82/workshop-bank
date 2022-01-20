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

foreach ($accounts as $account) {
    echo "<p>{$account->getAccountInfo()}</p>";
    echo "<br>";
}