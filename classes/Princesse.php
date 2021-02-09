<?php


class Princesse extends Personnage {
    private bool $saved;


    public function __construct(){
        parent::__construct();
        $this->setNom('peach');
        $this->x = 450;
        $this->y = 450;
    }
}