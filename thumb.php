<?php

//inclui a classe canvas
require_once 'canvas.php';
//arquivo utilizado na marca dagua
$marca = "images/main_logo (Custom).png";
if (isset($_GET['img'])) {
    $imagem = $_GET['img'];
    $data = explode("/", $imagem);
    $tamanho = getimagesize($imagem);
    $largura = $tamanho[0];
    $altura = $tamanho[1];

    if ($largura > $altura) {
        //deitado
        $w = 569;
        $h = 320;
    } elseif ($largura < $altura) {
        //em pé
        $w = 320;
        $h = 569;
    }elseif($largura == $altura){
        $w = $largura;
        $h = $altura;
    }

    //marca posicao horizontal (baixo, meio, topo)
    $mh = "baixo";
    //marca posicao vertical (direita, esquerda, centro)
    $mv = "centro";
    //verifica se largura(w) e altura sao informados na url
    if (isset($_GET['w']) && isset($_GET['h'])) {
        $w = $_GET['w'];
        $h = $_GET['h'];
    }
    //verifica se posicao da marca informada na url
    if (isset($_GET['mv']) && isset($_GET['mh'])) {
        $mv = $_GET['mv'];
        $mh = $_GET['mh'];
    }
    $t = new Canvas;
    //carregando a imagem
    $t->carrega($imagem);
    //verifica se se ha crop/corte no redimensionamento
    if (isset($_GET['c'])) {
        $t->redimensiona($w, $h, 'crop');
    } else {
        //$t->marca($marca, "$mh", "$mv");
        $t->redimensiona($w, $h);
        //inclui a marca dagua
        $t->marca($marca, $mh, $mv);
    }
    //$t->grava('galeria/teste/'.$data[1],100);
    $t->grava();
    //gera a miniatura
    exit;
}
?>