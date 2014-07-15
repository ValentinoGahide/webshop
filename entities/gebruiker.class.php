<?php

class Gebruiker {

    private static $idMap = array();
    private $id;
    private $naam;
    private $usernaam;
    private $wachtwoord;
    private $level_auth;
    private $adres;
    private $email;
    private $telefoon;
    private $actief;
    private $dt_aangemaakt;
    private $postcode_id;
    private $korting;
    private $btwnr;
    private $opm_extra;
    private $postcode;
    
    

    private function __construct($id, $naam, $usernaam, $wachtwoord, $level_auth, $adres, $email, 
                                 $telefoon, $actief, $dt_aangemaakt, $postcode_id, $korting, 
                                 $btwnr, $opm_extra, $postcode) {
        $this->id = $id;
        $this->naam = $naam;
        $this->usernm = $usernaam;
        $this->pasw = $wachtwoord;
        $this->level_auth = $level_auth;
        $this->adres = $adres;
        $this->email = $email;
        $this->telefoon = $telefoon;
        $this->actief = $actief;
        $this->dt_aangemaakt = $dt_aangemaakt;
        $this->postcode_id = $postcode_id;
        $this->korting = $korting;
        $this->btwnr = $btwnr;
        $this->opm_extra = $opm_extra;
        $this->postcode = $postcode;
    }

    public static function create($id, $naam, $usernaam, $wachtwoord, $level_auth, $adres, $email, 
                                 $telefoon, $actief, $dt_aangemaakt, $postcode_id, $korting, 
                                 $btwnr, $opm_extra, $postcode) 
    {
        if (!isset(self::$idMap[$id])) {
            self::$idMap[$id] = new Gebruiker($id, $naam, $usernaam, $wachtwoord, $level_auth, $adres, $email, 
                                 $telefoon, $actief, $dt_aangemaakt, $postcode_id, $korting, 
                                 $btwnr, $opm_extra, $postcode);
        }
        return self::$idMap[$id];
    }

    public function getId() {
        return $this->id;
    }

    public function getNaam() {
        return $this->naam;
    }

    public function getUsernaam() {
        return $this->usernaam;
    }

    public function getWachtwoord() {
        return $this->wachtwoord;
    }

    public function getLevel_auth() {
        return $this->level_auth;
    }

    public function getAdres() {
        return $this->adres;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefoon() {
        return $this->telefoon;
    }

    public function getActief() {
        return $this->actief;
    }

    public function getDt_aangemaakt() {
        return $this->dt_aangemaakt;
    }

    public function getPostcode_id() {
        return $this->postcode_id;
    }

    public function getKorting() {
        return $this->korting;
    }
    public function getBtwbr() {
        return $this->btwnr;
    }
    public function getOpm_extra() {
        return $this->opm_extra;
    }

    public function getPostcode() {
        return $this->postcode;
    }
    
    public function setNaam($naam) {
        $this->naam = $naam;
    }

    public function setUsernm($usernaam) {
        $this->usernaam = $usernaam;
    }

    public function setPasw($wachtwoord) {
        $this->wachtwoord = $wachtwoord;
    }

    public function setLevel_auth($level_auth) {
        $this->level_auth = $level_auth;
    }

    public function setAdres($adres) {
        $this->adres = $adres;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefoon($telefoon) {
        $this->telefoon = $telefoon;
    }

    public function setActief($actief) {
        $this->actief = $actief;
    }

    public function setDt_aangemaakt($dt_aangemaakt) {
        $this->dt_aangemaakt = $dt_aangemaakt;
    }

    public function setPostcode_id($postcode_id) {
        $this->postcode_id = $postcode_id;
    }

    public function setKorting($korting) {
        $this->korting = $korting;
    }

    public function setBtwnr($btwnr) {
        $this->btwnr = $btwnr;
    }
    public function setOpm_extra($opm_extra) {
        $this->opm_extra = $opm_extra;
    }

    public function setPostcode($postcode) {
        $this->postcode = $postcode;
    }

}
