<?php
require_once 'core\main\model\beans\Novidade.php';  
require_once 'core\main\model\beans\Personagem.php';
require_once 'core\main\model\beans\Manga.php';
require_once 'core\main\model\beans\Capitulo.php';

$capitulos =[
    new Capitulo("0","finalizado","/", "/" ),
    new Capitulo("1","finalizado","/","/"),
    new Capitulo("2","finalizado","/","/")
];

$mangas =[
    new Manga("Super Danganronpa 2: Goodbye Despair","core/resources/img/mangas/Super_danganronpa_2_doodbye_despair.png","Super Danganronpa 2: Goodbye Despair","Comédia, Drama,Horror, Mistério, Psicológico,Seinen, Vida Escolar","Spike Chunsoft","Kuroki Q","Enterbrain","3",$capitulos),
    new Manga("Hakata Tonkotsu Ramens","core/img/mangas/Hakata_tonkotsu_ramens.png","Hakata Pork Bones Ramens","Ação, Shounen","Chiaki Kisaki","Kisara Akino","Square Enix","Square Enix",$capitulos),
    new Manga("Danganronpa Gaiden: Killer Killer","core/img/mangas/Danganronpa_gaiden_killer_killer.png","ダンガンロンパ害伝 キラーキラー","Comédia, Mistério, Psicológico, Shounen","Kodaka Kazutaka, Koizumi Yoichirou, Sasako Mitomo","Kuroki Q","Kodansha","2",$capitulos),
    new Manga("Kiznaiver","core/img/mangas/Kiznaiver.png","キズナイーバー","Drama, Sci-Fi, Seinen","Roji Karegishi","Roji Karegishi","Dengeki Maoh","0",$capitulos),
    new Manga("Hisone to Maso-tan: Nao no Sora","core/img/mangas/Hisone_to_Maso-tan_nao_no_Sora.png","ひそねとまそたん 名緒のそら","Fantasia, Shounen, Militar","BONES, Shinji Higuchi, Mari Okada","Toshinori Aoki","KADOKAWA","0",$capitulos),
    new Manga("Asobi Asobase","core/img/mangas/Asobi_asobase.png","あそびあそばせ","Comédia, Drama, Escolar","Rin Suzukawa","Rin Suzukawa","Hakusensha","0",$capitulos),
    new Manga("Karada Sagashi","core/img/mangas/Karada_sagashi.png","Body Search, Re/member","Vida Escolar, Horror, Shounen","Welzard","Katsutoshi Murase","Jump+","6",$capitulos)
];

$novidades =[
    new Novidade("12/06/2019","teste","testar isso","link"),
    new Novidade("12/06/2019","teste","testar isso","link"),
    new Novidade("12/06/2019","teste","testar isso","link"),
    new Novidade("12/06/2019","teste","testar isso","link"),
    new Novidade("12/06/2019","teste","testar isso","link"),
    new Novidade("12/06/2019","teste","testar isso","link"),
    new Novidade("12/06/2019","teste","testar isso","link"),
    new Novidade("12/06/2019","teste","testar isso","link")
];
$personagens = [
    new Personagem("Nanami chiaki","core/resources/img/personagens/Chiaki_nanami.png","Super Danganronpa 2: Goodbye Despair"),
    new Personagem("Nanami chiaki","core/resources/img/personagens/Chiaki_nanami.png","Hakata Tonkotsu Ramens"),
    new Personagem("Nanami chiaki","core/resources/img/personagens/Chiaki_nanami.png","Danganronpa Gaiden: Killer Killer"),
    new Personagem("Nanami chiaki","core/resources/img/personagens/Chiaki_nanami.png","Kiznaiver"),
    new Personagem("Nanami chiaki","core/resources/img/personagens/Chiaki_nanami.png","Hisone to Maso-tan: Nao no Sora"),
    new Personagem("Nanami chiaki","core/resources/img/personagens/Chiaki_nanami.png","Asobi Asobase"),
    new Personagem("Nanami chiaki","core/resources/img/personagens/Chiaki_nanami.png","Karada Sagashi")
];

function printarPersonagens(){
    global $personagens;
    Personagem::printarTodos($personagens);
}