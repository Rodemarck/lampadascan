<?php

class Capitulo {
    var $obra;
    var $capitulo;
    var $estado;
    var $tradutor;
    var $typesetter;
    var $redraw;
    var $cleanner;
    var $revisor;
    var $union;
    var $imgur;

    public function Capitulo($capitulo,$estado,$union,$imgur){
        $this->capitulo = $capitulo;
        $this->estado = $estado;
        $this->union = $union;
        $this->imgur = $imgur;
    }

    public static function printarTodos($vetor){
        if (isset($vetor)) {
            echo "<table><thead>";
            echo "<th>capitulo</th>";
            echo "<th>estado</th>";
            echo "<th>union</th>";
            echo "<th>imgur</th>";
            echo "</thead><tbody>";
            for ($i=0; $i < sizeof($vetor); $i++) { 
                $vetor[$i]->printar();
            }
            echo "</tbody</table>";
        }
    }

    private static function printaInicio(){
       
    }

    public function printar(){
        echo "<tr>";
        echo "<th>{$this->capitulo}</th>";
        echo "<th>{$this->estado}</th>";
        echo "<th><a href=\"{$this->union}\">union</a></th>";
        echo "<th><a href=\"{$this->imgur}\">imgur</a></th>";
        echo "</tr>";
    }
}
