<?php
require_once 'IndexController.php';  


$nomeManga = "";

function procurarManga(){
    global $nomeManga,$mangas;
    if(isset($_GET['manga']))
        $nomeManga = $_GET['manga'];
    Manga::procuraManga($mangas,$nomeManga);
}
