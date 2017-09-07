<?php

class TEMPperson {
private $fname;
private $midname;
private $lname;

function __construct($tempFirst = "Johnny", $tempMid = "Doe", $tempLast = "Appleseed"){
echo "Within TEMP PERSON constructor".PHP_EOL;
$this->fname = $tempFirst;
$this->midname = $tempMid;
$this->lname = $tempLast;
}

protected function setfname($fname = "tempfirst"){
$this->fname = $fname;
}

protected function setmidname($midname = "tempmid"){
$this->midname = $midname;
}

protected function setlname($lname = "templname"){
$this->lname = $lname;
}

public function getfname(){
return $this->fname.PHP_EOL;
}

public function getmidname(){
return $this->midname.PHP_EOL;
}

public function getlname(){
return $this->lname.PHP_EOL;
}

public function getFullName(){
return (getfname()." ".getmidname()." ".getlname());
}
}

class Cousin extends TEMPperson {
private $distance;

function __construct($tempDistance = "1st"){
$this->distance = $tempDistance;
}

public getDistance(){
return $this->distance.PHP_EOL;
}
}

$personObject = new TEMPperson();
echo $personObject->getFullName();

$cousin = new Cousin();
echo $cousin.getFullName()." is a ".$cousin.getDistance()." cousin.";
