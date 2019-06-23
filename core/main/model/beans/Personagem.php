<?php

class Personagem{
    var $nome;
    var $imagem;
    var $obra;

    public function Personagem($nome,$imagem,$obra){
        $this->nome = $nome;
        $this->imagem = $imagem;
        $this->obra = $obra;
    }

    public function printar(){
        echo "<div class=\"col-sm-8 col-md-4 col-lg-4 mt-5\"><div class=\"img\">";
        echo "<a href=\"obras.php?manga={$this->obra}\"><img class=\"img-fluid\" src=\"{$this->imagem}\" alt=\"{$this->nome}\"></a>";
        echo "</div><p>{$this->obra}</p></div>";
    }

    public static function printarTodos($array){
        if(isset($array) && sizeof($array) > 0){
            echo "<div class=\"row justify-content-sm-center\">";
            for ($i=0; $i < sizeof($array) ; $i++) { 
                $array[$i]->printar();
            }
            echo "</div>";
        } 
    }
    
    
}

