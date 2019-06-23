<?php

class Novidade{
    var $data;
    var $tema;
    var $conteudo;
    var $link;

    public function Novidade($data,$tema,$conteudo,$link){
        $this->data = $data;
        $this->tema = $tema;
        $this->conteudo = $conteudo;
        $this->link = $link;
    }

    public function printar(){
        echo "<a href=\"{$this->link}\"><div class=\"d-flex news_row\">";
        echo "<div class=\"news_data d-flex align-items-center\">{$this->data}</div>";
        echo "<div class=\"flex-grow-1 news_title d-flex align-items-center\">{$this->tema} > {$this->conteudo}</div>";
        echo "<div class=\"news_icon d-flex align-items-center\"><i class=\"fas fa-caret-right\"></i></div>";
        echo "</div></a>";
    }

    public static function printarTodos($array){
        if(isset($array) && sizeof($array) > 0 ){
            for ($i=0; $i < sizeof($array) ; $i++) { 
                $array[$i]->printar();
            }
        } 
    }
    
}
