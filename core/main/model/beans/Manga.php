<?php
require_once 'Capitulo.php';


class Manga{
    var $nome;
    var $imagem;
    var $nomeAlternativo;
    var $generos;
    var $autor;
    var $artista;
    var $editora;
    var $progresso;
    var $capitulos;
    
    public function Manga($nome,$imagem,$nomeAlternativo,$generos,$autor,$artista,$editora,$progresso,$capitulos){
        $this->nome = $nome;
        $this->imagem = $imagem;
        $this->nomeAlternativo = $nomeAlternativo;
        $this->generos = $generos;
        $this->autor = $autor;
        $this->artista = $artista;
        $this->editora = $editora;
        $this->progresso = $progresso;
        $this->capitulos = $capitulos;
    }
    public function printar(){ 
        echo "<div class=\"block\">";
        echo "<div>";
        Capitulo::printarTodos($this->capitulos);
        echo "</div>";
        echo "<h1>{$this->nome}</h1>";
        echo "<img src=\"{$this->imagem}\" >";
        echo "<ul class=\"block\">";
        echo "<li>Nome Alternativo: {$this->nomeAlternativo}</li>";
        echo "<li>Gênero(s): {$this->generos}</li>";
        echo "<li>Autor: {$this->autor}</li>";
        echo "<li>Artista: {$this->artista}</li>";
        echo "<li>Editora: {$this->editora}</li>" + 6;
        echo "<li>Progresso: {$this->progresso} capitulos</li>";
        echo "</ul>";
        echo "</div>";
    }

  

    public static function procuraManga($vetor,$nomeManga){
        
        $check = true;
        if(isset($vetor) && isset($nomeManga)){
            $nomeManga = strtolower($nomeManga);
            for ($i=0; $i < sizeof($vetor) ; $i++) { 
                if(strtolower($vetor[$i]->nome) === $nomeManga){
                    $vetor[$i]->printar();
                    return;
                }        
            }
        }
        Manga::naoEncontrado($nomeManga);
    }

    private static function naoEncontrado($nomeManga){
        echo "<h1>nâo conseguimos achar o manga \"{$nomeManga}\"</h1>";
    }
}