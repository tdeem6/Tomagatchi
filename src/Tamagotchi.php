<?php
class Tamagotchi
{
    private name;
    private time;
    private food;
    private happiness;
    private sleep;

    function __construct($name, $time=0, $food=100, $happiness=100, $sleep=100)
    {
        $this->name = $name;
        $this->time = $time;
        $this->food = $food;
        $this->happiness = $happiness;
        $this->sleep = $sleep;
    }

    function getName()
    {
        return $this->name;
    }
    function setName($new_name)
    {
        $this->name = $new_name;
    }

    function getTime()
    {
       return $this->time;
    }
    function setTime($new_time)
    {
        $this->time = $new_time;
    }

    function getFood()
    {
        return $this->food;
    }
    function setFood($new_food)
    {
        $this->food = $new_food;
    }

    function getHappiness()
    {
        return $this->happiness;
    }
    function setHappiness($new_happiness)
    {
        $this->happiness = $new_happiness;
    }

    function getSleep()
    {
        return $this->sleep;
    }
    function setSleep($new_sleep)
    {
        $this->sleep = $new_sleep;
    }

    function isDead()
    {
        if ($this->food <= 0) {
            return true;
        }elseif {($this->happiness <= 0)
            return true;
        }elseif {($this->sleep <= 0)
            return true;
        }else {
            return false;
        }
    }

    function feed()
    {
        $this->food = (($this->food) + 10);
        $this->happiness = (($this->happiness) + 5);
        $this->sleep = (($this->sleep) - 10);
        $this->time = (($this->time) + 1)
    }
    function play()
    {
        $this->food = (($this->food) - 10);
        $this->happiness = (($this->happiness) + 10);
        $this->sleep = (($this->sleep) - 10);
        $this->time = (($this->time) + 2)
    }
    function sleep()
    {
        $this->food = (($this->food) - 10);
        $this->happiness = (($this->happiness) + 2);
        $this->sleep = (($this->sleep) + 10);
        $this->time = (($this->time) + 5)
    }
    function time()
    {
        $this->food = (($this->food) - 10);
        $this->happiness = (($this->happiness) - 10);
        $this->sleep = (($this->sleep) - 10);
        $this->time = (($this->time) + 5)
    }
}

?>
