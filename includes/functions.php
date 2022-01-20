<?php

class Account {
    protected $accountNumber;
    protected int $balance = 0;

    public function __construct($_accountNumber, int $_balance)
    {
        $this->accountNumber = $_accountNumber;
        $this->balance = $_balance;
    }
    // Get Info
    public function getAccountInfo() {
        return "Account Number: <br> {$this->getAccountNumber()} <br> Account Balance: <br> {$this->getBalance()}";
    }

    // Account Number Options
    protected function setAccountNumber(int $_accountNumber) {
        $this->accountNumber = $_accountNumber;
    }

    public function getAccountNumber() {
        return $this->accountNumber;

    }
    // Balance Options
    protected function setBalance(int $_balance) {
        $this->balance = $_balance;
    }

    public function getBalance(): int {
        return $this->balance;
    }
    

}
