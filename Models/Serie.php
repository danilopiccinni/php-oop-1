<?php

class Serie {
    public $titolo;
    public $titoloOriginale;
    public $regista;
    public $generi;
    public $annoProduzione;
    public $descrizione;
    public $isOld;
    public static $tipo = "Serie";

    public function __construct( string $titolo, string $titoloOriginale, string $regista, array $genere,  string $annoProduzione , string $descrizione ) {

        $this->titolo = $titolo;
        $this->titoloOriginale = $titoloOriginale;
        $this->annoProduzione = $annoProduzione;
        $this->regista = $regista;
        $this->generi = $genere;
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