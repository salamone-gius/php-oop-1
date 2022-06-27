<?php

// creo la classe Movie... 
class Movie {
    // ...con le proprietà che ogni oggetto dovrà avere
    public $title;
    public $genre;
    // setto $year come 'private' per non condividere il suo valore
    private $year;
    public $direction;
    public $mainCast;

    // creo la funzione che convalida l'anno
    private function yearValidation($_year) {
        if ($_year > 1900) {
            return true;
        } else {
            return false;
        }
    }

    // creo la setter function per SETTARE (SCRIVERE) l'anno con la funzione di validazione all'interno
    public function setYear($_year) {
        if ($this->yearValidation($_year)) {
            $this->year = $_year;
        }
    }

    // creo la getter function per OTTENERE (LEGGERE) l'anno
    public function getYear() {
        return $this->year;
    }

    // creo il costruttore che genererà gli oggetti appartenenti alla classe Movie
    public function __construct($_title, $_genre, $_year)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }
}

?>