<?php
    class Lid{
        private $Lid_nr;
        private $Lid_voornaam;
        private $Lid_tussenvoegsel;
        private $Lid_achternaam;
        private $Lid_straat;
        private $Lid_huisnr;
        private $Lid_woonplaats;
        private $Lid_telefooon;
        private $Lid_email;
        private $Lid_geslacht;
        private $Lid_geboortedatum;
        private $Lid_sinds;

        //getters en setters
        function setLidnr($lid_nr) {
            $this->lid_nr = $lid_nr;
        }
    
        function getLidnr() {
            return $this->lid_nr;
        }
    
        function setVoornaam($Lid_voornaam) {
            $this->Lid_voornaam = $Lid_voornaam;
        }
    
        function getVoornaam() {
            return $this->Lid_voornaam;
        }

        function setWachtwoord($Lid_wachtwoord) {
            $this->Lid_wachtwoord = $Lid_wachtwoord;
        }
    
        function getWachtwoord() {
            return $this->lid_wachtwoord;
        }
    
        function setTussenvoegsel($Lid_tussenvoegsel) {
            $this->Lid_tussenvoegsel = $Lid_tussenvoegsel;
        }
    
        function getTussenvoegsel() {
            return $this->Lid_tussenvoegsel;
        }
    
        function setAchternaam($Lid_achternaam) {
            $this->Lid_achternaam = $Lid_achternaam;
        }
    
        function getAchternaam() {
            return $this->Lid_achternaam;
        }
    
        function setStraat($Lid_straat) {
            $this->Lid_straat = $Lid_straat;
        }
    
        function getStraat() {
            return $this->Lid_straat;
        }
        
        function setHuisnr($Lid_huisnr) {
            $this->Lid_huisnr = $Lid_huisnr;
        }
    
        function getHuisnr() {
            return $this->Lid_huisnr;
        }

        function setWoonplaats($Lid_woonplaats) {
            $this->Lid_woonplaats = $Lid_woonplaats;
        }
    
        function getWoonplaats() {
            return $this->Lid_woonplaats;
        }

        function setTelefoon($Lid_telefoonnr) {
            $this->Lid_telefoonnr = $Lid_telefoonnr;
        }
    
        function getTelefoonnr() {
            return $this->Lid_telefoonnr;
        }

        function setEmail($Lid_email) {
            $this->Lid_email = $Lid_email;
        }
    
        function getEmail() {
            return $this->Lid_email;
        }

        function setGeslacht($Lid_geslacht) {
            $this->Lid_geslacht = $Lid_geslacht;
        }
    
        function getGeslacht() {
            return $this->Lid_geslacht;
        }

        function setGeboortedatum($Lid_geboortedatum) {
            $this->Lid_geboortedatum = $Lid_geboortedatum;
        }
    
        function getGeboortedatum() {
            return $this->Lid_geboortedatum;
        }

        function setLidsinds($Lid_sinds) {
            $this->Lid_sinds = $Lid_sinds;
        }
    
        function getLidsinds() {
            return $this->Lid_sinds;
        }
    }

    
?>