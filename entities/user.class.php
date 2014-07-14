<?php

class User {

    private static $idMap = array();
    private $id;
    private $gebruikersnaam;
    private $email;
    private $wachtwoord;

    public static function create($id, $gebruikersnaam, $wachtwoord) {
        if (!isset(self::$idMap[$id])) {
            self::$idMap[$id] = new User($id, $gebruikersnaam,$email, $wachtwoord);
        }
        return self::$idMap[$id];
    }

    public function __construct($id, $gebruikersnaam, $wachtwoord) {
        $this->id = $id;
        $this->gebruikersnaam = $gebruikersnaam;
        $this->email = $email;
        $this->wachtwoord = $wachtwoord;
    }

    public function getGebruikersnaam() {
        return $this->gebruikersnaam;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function getWachtwoord() {
        return $this->wachtwoord;
    }

}
