<?php

require_once "class.apartment.php";

class Person extends Apartment
{
    private $personName;
    private $personTel;
    private $personMail;
    private $personFlatNo;

    /*SETTER FUNCTIONS*/
    public function setPersonName($name){
        $this->personName = $name;
    }
    public function setPersonTel($tel){
        $this->personTel = $tel;
    }
    public function setPersonMail($mail){
        $this->personMail = $mail;
    }
    public function setPersonFlatNo($flat){
        $this->personFlatNo = $flat;
    }

    /*GETTER FUNCTIONS*/
    public function getPersonName(){
        return$this->personName;
    }
    public function getPersonTel(){
        return$this->personTel;
    }
    public function getPersonMail(){
        return $this->personMail;
    }
    public function getPersonFlatNo(){
        return$this->personFlatNo;
    }
}