<?php
class Car extends Vehicle{
protected $sound;

    /**
     * Get the value of Sound
     *
     * @return mixed
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * Set the value of Sound
     *
     * @param mixed sound
     *
     * @return self
     */
    public function setSound($sound)
    {
        $this->sound = $sound;

        return $this;
    }

}
?>
