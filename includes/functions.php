<?php

class Account {
    protected $accountNumber;
    protected int $balance = 0;

    public function __construct($_accountNumber, int $_balance)
    {
        $this->accountNumber = $_accountNumber;
        $this->balance = $_balance;
    }
    // Account Number Options
    public function setAccountNumber(int $_accountNumber) {
    }

    public function getAccountNumber() {

    }
    // Balance Options
    public function setBalance(int $_balance) {
    }

    public function getBalance() {

    }
    
    public function getAccountInfo() {
        return "Account Number: {$this->getAccountNumber()} <br> Account Balance: {$this->getBalance()}";
    }

}
