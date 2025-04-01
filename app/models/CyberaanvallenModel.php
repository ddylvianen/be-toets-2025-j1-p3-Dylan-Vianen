<?php

class CyberaanvallenModel
{
    private $db;

    public function __construct()
    {
        /** Door het maken van een database instantie
         *  kunnen we de database functies gebruiken
         *  en hebben we een verbinding met de database
         */
        $this->db = new Database();
    }

    public function getAllCyberaanvallen()
    {
        $sql = 'SELECT Naam, Jaar, AantalSlachtoffers, TypeAanval, Schade FROM Cyberaanval ORDER BY AantalSlachtoffers DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}