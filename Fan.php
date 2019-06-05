<?php


class Fan
{
    public $SLOW = 1, $MEDIUM = 2, $FAST = 3;
    public $speed = 1, $on = false, $radius = 5, $color = "blue", $name;

    function __construct($name)
    {
        $this->speed;
        $this->name = $name;
    }

    function on()
    {
        $this->on = true;
    }

    function off()
    {
        $this->on = false;
    }

    function toString()
    {
        if ($this->on) {
            echo "Fan: ", $this->name, "<br>", "speed: ", $this->speed, "<br>", "color: ", $this->color,
            "<br>", "radius: ", $this->radius, "<br>", " fan is on", "<br>";
        } else {
            echo "Fan: ", $this->name, "<br>", "color: ", $this->color, "<br>", "radius: ", $this->radius,
            "<br>", " fan is off", "<br>";
        }
    }

}