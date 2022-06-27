<?php

class Movie {
    public $title;
    public $genre;
    private $year;
    public $direction;
    public $mainCast;


    private function yearValidation($_year) {
        if ($_year > 1900) {
            return true;
        } else {
            return false;
        }
    }

    public function setYear($_year) {
        if ($this->yearValidation($_year)) {
            $this->year = $_year;
        }
    }

    public function getYear() {
        return $this->year;
    }

    public function __construct($_title, $_genre, $_year)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }
}

?>