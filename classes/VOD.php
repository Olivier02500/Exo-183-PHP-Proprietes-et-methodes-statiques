<?php

class VOD {

    public array $film ;
    public int $tarif ;
    public static int $totalAbonne = 12000;

    public function __construct() {
        $this->film = ['Rocky' ,'Fight Club' ,'Harry Potter', 'Iron Man' , 'X-Men'];
        $this->tarif = 12;
        self::$totalAbonne;
    }

    /**
     * @return array|string[]
     */
    public function getFilm(): array
    {
        return $this->film;
    }

    /**
     * @param array|string[] $film
     */
    public function setFilm(array $film): void
    {
        $this->film = $film;
    }

    /**
     * @return int
     */
    public function getTarif(): int
    {
        return $this->tarif;
    }

    /**
     * @param int $tarif
     */
    public function setTarif(int $tarif): void
    {
        $this->tarif = $tarif;
    }

    /**
     * @return int
     */
    public static function getTotalAbonne(): int
    {
        return self::$totalAbonne;
    }

    /**
     * @param int $totalAbonne
     */
    public static function setTotalAbonne(int $totalAbonne): void
    {
        self::$totalAbonne = $totalAbonne;
    }

    public static function addAbo(int $totalAbonne): void {
        self::$totalAbonne = $totalAbonne;
    }

    /**
     * @return int
     */
    public static function getAbo (): int {
        return self::$totalAbonne++;
    }

}