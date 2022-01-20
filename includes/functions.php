<?php

class Account {
    protected $accountNumber;
    protected int $balance = 0;

    public function __construct(int $_accountNumber, int $_balance)
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
    
    public function getInfo() {
        return "Jag är en $this->brand $this->model av årsmodell $this->model med registreringsnummer $this->plate <br>";
    }

}
