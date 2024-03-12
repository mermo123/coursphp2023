<?php
class Personnage
{
    private string $nom;
    private int $vie;
    private int $attaque;

    //constructor
    public function __construct(string $lenom, int $lavie, int $lattaque)
    {
        $this->nom = $lenom;
        $this->vie = $lavie;
        $this->attaque = $lattaque;
    }
    //Getters & setters
    //nom
    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $lenom): void
    {
        $this->nom = $lenom;
    }

    //vie
    public function getVie(): int
    {
        return $this->vie;
    }
    public function setVie(int $lavie): void
    {
        $this->vie = $lavie;
    }

    //attaque
    public function getAttaque(): int
    {
        return $this->attaque;
    }
    public function setAttaque(int $lattaque): void
    {
        $this->attaque = $lattaque;
    }

    //tostring function
    public function __toString()
    {
        return "Nom : " . $this->nom . "<br>" .
            "Vie : " . $this->vie . "<br>" .
            "Puissance d'attaque : " . $this->attaque . " de dégats" . "<br>" .
            "<br>";
    }

    public function estVivant(): bool
    {
        // if ($this->vie > 0 == true) {
        //     return true;
        // } else {
        //     return false;
        // }
        if ($this->vie > 0) {
            return true;
        }
        return false;
        // return $this->vie > 0 ? true:false;

        // return $this->vie > 0;
    }

    public function lanceAttaque(Personnage $unPersonnage): void
    {
        //$unPersonnage->vie = $unPersonnage->vie - $this->attaque;
        $unPersonnage->vie -= $this->attaque;
    }
}
