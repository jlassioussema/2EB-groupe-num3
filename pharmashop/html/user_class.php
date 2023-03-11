<?php
require('configuration.php');
class User
{
    private $cin;
    private $nom;
    private $prenom;
    private $mot_de_passe;
    private $email;
    private $civilite;
    private $ville;


    public function __construct($cin, $nom, $prenom, $mot_de_passe, $email, $civilite, $ville)
    {
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mot_de_passe = $mot_de_passe;
        $this->email = $email;
        $this->civilite = $civilite;
        $this->ville = $ville;
    }

    public function getCin()
    {
        return $this->cin;
    }
    public function getnom()
    {
        return $this->nom;
    }
    public function getprenom()
    {
        return $this->prenom;
    }
    public function getmot_de_passe()
    {
        return $this->mot_de_passe;
    }
    public function getemail()
    {
        return $this->email;
    }

    public function getville()
    {
        return $this->ville;

    }

    public function getcivilite()
    {
        return $this->civilite;

    }
    public function setCin($cin)
    {
        $this->cin = $cin;
    }
    public function setnom($nom)
    {
        $this->nom = $nom;
    }
    public function setprenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setmot_de_passe($mot_de_passe)
    {
        $this->mot_de_passe = $mot_de_passe;
    }
    public function setemail($email)
    {
        $this->email = $email;
    }

    public function setville($ville)
    {
        $this->ville = $ville;
    }

    public function setcivilite($civilite)
    {
        $this->civilite = $civilite;
    }





}

?>