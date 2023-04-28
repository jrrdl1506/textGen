<?php


class Verbo{
    public $vTiempo="";// Presente Pasado Futuro
    public $vModo=""; // Indicativo Subjuentivo Imperativo
    public $sAspecto=""; // Perfecto o Imperfecto.
    public function constructor($gen, $num, $tipo){
        $this->sGenero       =$gen;
        $this->sNumero       =$num;
        $this->sTipo         =$tipo;
    }
}



?>