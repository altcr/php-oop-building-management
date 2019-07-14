<?php

class Apartment
{
    private $buildingAddress;
    private $buildingName;
    private $buildingNo;
    private $personNumber;

    /*SETTER FUNCTIONS*/
    public function setApartAddress($address){
        $this->buildingAddress = $address;
    }
    public function setApartName($name){
        $this->buildingName = $name;
    }
    public function setApartNo($no){
        $this->buildingNo = $no;
    }
    public function setApartNumber($number){
        $this->personNumber = $number;
    }

    /*GETTER FUNCTIONS*/
    public function getApartAddress(){
        return $this->buildingAddress;
    }
    public function getApartName(){
        return $this->buildingName;
    }
    public function getApartNo(){
        return $this->buildingNo;
    }
    public function getApartNumber(){
        return $this->personNumber;
    }
}