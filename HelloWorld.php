<?php

class HelloWorld {

    private $name;
    private $address;
    private $gender;

    function getName() {
        return $this->name;
    }

    function getAddress() {
        return $this->address;
    }

    function getGender() {
        return $this->gender;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

}
