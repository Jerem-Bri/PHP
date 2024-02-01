<?php
Class Eleve{
    private $nom;
    private $prenom;

    public function __construct($paramNom, $paramPrenom)
    {
        $this->nom = $paramNom ;
        $this->prenom = $paramPrenom ;
    }
    public function Travaille()
    {
        return "L'élève $this->nom $this->prenom travaille comme il faut! \n";
    }
}

$mrRobert = new Eleve("Robert", "Thimotée");
$mrBrissiere = new Eleve("Brissiere", "Jérémie");
echo $mrBrissiere->travaille();
echo $mrRobert->travaille();
