<?php

class Movie {
    public $titolo;
    public $titoloOriginale;
    public $regista;
    public $annoProduzione;
    public $descrizione;
    public $isOld;
    public static $tipo = "Film";

    public function __construct( string $titolo, string $titoloOriginale, string $regista,  string $annoProduzione , string $descrizione ) {

        $this->titolo = $titolo;
        $this->titoloOriginale = $titoloOriginale;
        $this->annoProduzione = $annoProduzione;
        $this->regista = $regista;
        $this->annoProduzione = $annoProduzione;
        $this->descrizione = $descrizione;
        $this->isOld = self::isOld($annoProduzione);
    
    }

    public function isOld($annoProduzione) {
        if($annoProduzione < 2000) {
            return true;
        } else {
            return false;
        }
    }
}