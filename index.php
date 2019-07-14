<?php

require_once "class.person.php";

$person = new Person;

$person->setApartAddress("#");
$person->setApartName("#");
$person->setApartNo("#");
$person->setApartNumber("#");
$person->setPersonName("#");
$person->setPersonTel("#");
$person->setPersonMail("#");
$person->setPersonFlatNo("#");

$info = [
    "Apartment Name" => $person->getApartName(),
    "Address" => $person->getApartAddress(),
    "Tenant Name" => $person->getPersonName(),
    "Tenant Phone" => $person->getPersonTel(),
    "Flat Number" => $person->getPersonFlatNo()
];

echo "<pre>";
print_r($info);
echo "</pre>";
