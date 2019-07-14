<?php

require_once "class.person.php";

$person = new Person;

$person->setApartAddress("Eskişehir");
$person->setApartName("Köşkdağı");
$person->setApartNo(36);
$person->setApartNumber(20);
$person->setPersonName("Ali TECER");
$person->setPersonTel("555 055 0055");
$person->setPersonMail("m.tecer97@hotmail.com");
$person->setPersonFlatNo("3");

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