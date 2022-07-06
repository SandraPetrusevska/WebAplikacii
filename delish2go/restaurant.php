<?php
class Restoran {
    private $id;
    private $ime;
    private $vreme;

    public function __construct($id, $name,$vreme) {
        $this->id = $id;
        $this->ime = $name;
        $this->vreme = $vreme;
    }

    public function getID() {
        return $this->id;
    }

    public function setID($value) {
        $this->id = $value;
    }

    public function getIme() {
        return $this->ime;
    }

    public function setIme($value) {
        $this->name = $value;
    }
    public function getRabotnoVreme() {
        return $this->vreme;
    }

    public function setRabotnoVreme($value) {
        $this->name = $value;
    }
}
?>