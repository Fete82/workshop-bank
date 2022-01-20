<?php

class Account {
    protected $accountNumber;
    protected int $balance = 0;

    public function __construct($_accountNumber, int $_balance)
    {
        $this->accountNumber = $_accountNumber;
        $this->balance = $_balance;
    }
    // GET INFO
    public function getAccountInfo() {
        return "<b>Account Number:</b><br>{$this->getAccountNumber()}<br><b>Account Balance:</b><br>{$this->getBalance()} USD";
    }

    // Account Number set/get
    protected function setAccountNumber(int $_accountNumber) {
        $this->accountNumber = $_accountNumber;
    }

    public function getAccountNumber() {
        return $this->accountNumber;

    }
    // Balance set/get
    protected function setBalance(int $_balance) {
        $this->balance = $_balance;
    }

    public function getBalance(): int {
        return $this->balance;
    }

    // Deposit/Withdraw funds
    public function withdraw($value) {
        $this->balance -= $value;
    }

    public function deposit($value) {
        $this->balance += $value;

    }
    
    

}
