<?php
class Personne
{
    private string $prenom;
    private int $age;
    private string $sexe;

    public function __construct(string $unPrenom, int $unAge, string $unSexe)
    {
        $this->prenom = $unPrenom;
        $this->age = $unAge;
        $this->sexe = $unSexe;
    }
    
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function getSexe(): string
    {
        return $this->sexe;
    }

    //les setters
    public function setPrenom(string $unPrenom): void
    {
        $this->prenom = $unPrenom;
    }
    public function setAge(int $unAge): void
    {
        $this->age = $unAge;
    }
    public function setSexe(float $unSexe): void
    {
        $this->sexe = $unSexe;
    }

    public function estPlusAge(Personne $unePersonne): bool
    {
        if ($this->getAge() > $unePersonne->getAge()) {
            return true;
        }
        return false;
    }

    public function __toString(): string
    {
        return "Prénom: " . $this->prenom . "<br>" .
            "Age : " . $this->age . "<br>" .
            "Sexe : " . $this->sexe . "<br>";
    }
}
