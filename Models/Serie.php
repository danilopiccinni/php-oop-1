<?php

class Serie {
    // Dichiarazione delle proprietà della classe
    public $titolo;
    public $titoloOriginale;
    public $regista;
    public $generi;
    public $annoProduzione;
    public $descrizione;
    public $isOld;
    public static $tipo = "Serie";

    // Costruttore della classe
    public function __construct( string $titolo, string $titoloOriginale, string $regista, array $genere,  string $annoProduzione , string $descrizione ) {

        // Inizializzazione delle proprietà della classe con i valori passati come parametro al costruttore
        $this->titolo = $titolo;
        $this->titoloOriginale = $titoloOriginale;
        $this->annoProduzione = $annoProduzione;
        $this->regista = $regista;
        $this->generi = $genere;
        $this->annoProduzione = $annoProduzione;
        $this->descrizione = $descrizione;

        // Chiamata al metodo isOld() per verificare se il film è vecchio o nuovo
        $this->isOld = self::isOld($annoProduzione);
    
    }

    // Metodo per verificare se il film è vecchio o nuovo
    public function isOld($annoProduzione) {
        if($annoProduzione < 2000) {
            return true;
        } else {
            return false;
        }
    }
}