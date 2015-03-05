<?php
class Place{
    private $place_name;
    private $country;

    function __construct($place,$country)
    {
        $this->place_name = $place;
        $this->country = $country;
    }

    function setPlaceName($place)
    {
        $this->place_name = $place;
    }

    function setCountry($country)
    {
        $this->country = $country;
    }

    function getPlaceName()
    {
        return $this->place_name;
    }

    function getCountry()
    {
        return $this->country;
    }

    function save()
    {
        array_push($_SESSION['vacation_list'], $this);

    }

    static function getAll()
    {
        return $_SESSION['vacation_list'];
    }

    static function deleteAll()
    {
         $_SESSION['vacation_list'] = array();
    }


}
?>
