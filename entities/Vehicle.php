<?php
abstract class Vehicle {
  protected $type;
  protected $mark;
  protected $color;
  protected $description;


  public function __construct($type,$mark,$color,$description){
    $this->setType($type);
    $this->setMark($mark);
    $this->setColor($color);
    $this->setDescription($description);
  }


    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


    public function getMark()
    {
        return $this->mark;
    }

    public function setMark($mark)
    {
        $this->mark = $mark;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }


    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

}
