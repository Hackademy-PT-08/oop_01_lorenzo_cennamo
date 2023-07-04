<?php

class Company{
    public $name;
    public $location;
    public $tot_employees;
    public static $avg_wage = 1500;
    public static $total = 0;

    public function __construct($_name, $_location, $_tot_employees){
        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;
        self::$total = self::$total + (self::$avg_wage * $this->tot_employees * 12);
    }

    public function companyData (){
        if($this->tot_employees > 0){
            var_dump("L'ufficio " . $this->name . " con sede in " . $this->location . ", ha " . $this->tot_employees . " dipendenti \n");
        } else{
            var_dump("L'ufficio " . $this->name . " con sede in " . $this->location . ", non  ha dipendenti \n");
        }
    }

    public function annualCost (){
        $cost = self::$avg_wage * $this->tot_employees * 12 . " Euro \n";
        var_dump("La spesa annuale dell'azienda " . $this->name . " è di: " . $cost);
    }

    public static function totalCost (){
        var_dump("Il totale di tutte le aziende è di: " . self::$total . "\n"); 
    }
}

$companyOne = new Company("TIM", "Italia", "500");
$companyTwo = new Company("vodafone", "Regno Unito", "1000");
$companyThree = new Company("wind3", "Italia", "100");
$companyFour = new Company("Iliad", "Francia", "1500");
$companyFive = new Company("Verizon", "USA", "0");

$companyOne -> companyData();
$companyTwo -> companyData();
$companyThree -> companyData();
$companyFour -> companyData();
$companyFive -> companyData();

$companyOne -> annualCost();
$companyTwo -> annualCost();
$companyThree -> annualCost();
$companyFour -> annualCost();
$companyFive -> annualCost();

Company::totalCost();