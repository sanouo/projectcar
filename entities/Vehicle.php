<?php
abstract class Vehicle {
  protected $id;
  protected $type;
  protected $mark;
  protected $color;
  protected $description;


  public function __construct(array $data){
    $this->hydrate($data);
  }

  public function hydrate(array $data)
  {
    foreach ($data as $key => $value) {
      $method = 'set' . ucfirst($key);
      if (method_exists($this,$method)) {
      $this->$method($value);
      }
    }
  }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $id = (int)$id;
          if ($id > 0)
      {
        $this->id = $id;
      }
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
            if (is_string($type))
        {
          $this->type = $type;
        }
    }


    public function getMark()
    {
        return $this->mark;
    }

    public function setMark($mark)
    {
          if (is_string($mark))
      {
        $this->mark = $mark;
      }
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
            if (is_string($color))
        {
          $this->color = $color;
        }
    }


    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
            if (is_string($description))
        {
          $this->description = $description;
        }
    }


}
