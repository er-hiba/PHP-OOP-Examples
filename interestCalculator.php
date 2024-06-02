<?php

class Account {
    private $amount;
    private $interest;

    function __construct($amount, $interest){
        $this->amount = $amount;
        $this->interest = $interest;
    }

    function get_amount(){
        return $this->amount;
    }

    function update_for_one_year(){
        $this->amount += $this->amount * $this->interest / 100;
    }
}

$account1 = new Account(200, 20);
$account2 = new Account(1000, 2);

echo "Initial amount of account 1: " . $account1->get_amount() . " DH";
echo "<br><br>Initial amount of account 2: " . $account2->get_amount() . " DH";

for ($i = 0; $i < 10; $i++){
    $account1->update_for_one_year('add');
    $account2->update_for_one_year('add');
} 

echo "<br><br>Amount of account 1 after 10 years: " . number_format($account1->get_amount(), 2) . " DH";
echo "<br><br>Amount of account 2 after 10 years: " . number_format($account2->get_amount(), 2) . " DH";

?>
