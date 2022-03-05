<?php

class Simple_2
{
    private $name;
    private $age;
    private $favoritecolor;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setFaveColor($favoritecolor)
    {
        $this->favoritecolor = $favoritecolor;
    }

    public function setTogetherInput($name,$age,$favoritecolor)
    {
        $this->name = $name;
        $this->age = $age;
        $this->favoritecolor = $favoritecolor;

    }


    public function getName()
    {
        if(!ctype_alpha($this->name))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->name;
    }

    

    public function getAge()
    {
        if(!is_numeric($this->age))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->age;
    }
      
    public function getFaveColor()
    {
        if(!ctype_alpha($this->favoritecolor))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->favoritecolor;
    }

    public function getTogetherInput()
    {
        return $this->name;
        return $this->age;
        return $this->favoritecolor;
    }

}