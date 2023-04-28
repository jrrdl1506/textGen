<?php

class Sujeto{
    public $sGenero="";// Masculino Femenino
    public $sNumero="";// Sigular Plural
    public $sTipo="";//Pronombre Nombre Propio Nombre Comun
    public function constructor($gen, $num, $tipo){
        $this->sGenero       =$gen;
        $this->sNumero       =$num;
        $this->sTipo         =$tipo;
    }
}



?>