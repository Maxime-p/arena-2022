<?php
namespace RobotWar;

class Robot{

  private $name;

  function __construct($name){
    $this->name = $name;
  }

  public function getName(){
    return $this->name;
  }

}

