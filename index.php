<?php

require("includes/functions.php");

$accounts = [];

$account = new Account(8169-5 123 345 6, 40);

foreach ($accounts as $account)
    echo "<h2>Account List</h2>";
    echo "<p>$account->getAccountInfo()</p>";
    echo "<br>";
