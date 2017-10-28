<?php
class Car extends Vehicle{
protected $sound;


    public function getSound()
    {
        return $this->sound;
    }


    public function setSound($sound)
    {
        $this->sound = $sound;
        return $this;
    }

}
?>
