<?php
class Person {
    public $last_name;
    public $first_name;
    public $date_of_birth;

    function __construct($first_name, $last_name, $date_of_birth){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->date_of_birth = $date_of_birth;
    }

    function introduce(){
        return "My name is " . $this->first_name . " " . $this->last_name;
    }

    function age(){
        $date_of_birth = new DateTime ($this->date_of_birth);
        $current_date = new DateTime ("today");
        $age = date_diff($date_of_birth, $current_date)->y;
        return $age . " years old.";
    }
}

$person1 = new Person("Hiba", "ERRAOUI", "2004/03/23");
$person2 = new Person("Wissal", "LOUTFI", "2004/09/25");

echo $person1->introduce() . ". I am " . $person1->age();
echo "<br><br>";
echo $person2->introduce() . ". I am " . $person2->age();
?>
