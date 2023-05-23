<?php

namespace Model\Association;

class Detenir {
    private int $idData ; # foreign key vers la table projetData
    private int $idRessource ; # foreign key vers la table ressources


    public function getLibelleData(): int {
        return $this->idData;
    }

    public function setLibelleData(int $idData): void {
        $this->idData = $idData;
    }

    public function getIdRessource(): int {
        return $this->idRessource;
    }

    public function setIdRessource(int $idRessource): void {
        $this->idRessource = $idRessource;
    }
    
}