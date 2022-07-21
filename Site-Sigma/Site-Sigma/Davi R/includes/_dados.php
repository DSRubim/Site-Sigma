<?php

$produtos = array(
    0 => array('nome'=>'Capivara Legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'Capivara.png'),
    1 => array('nome'=>'Capivara Funk','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'cap2.png'),
    2 => array('nome'=>'Capivara Deep','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capdeep.png'),
    3 => array('nome'=>'Capivara Vibes','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capvibes.png'),
    4 => array('nome'=>'elefante legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
    5 => array('nome'=>'suricato legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
    6 => array('nome'=>'galinha legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
    7 => array('nome'=>'baleia legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
    8 => array('nome'=>'leao legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
    9 => array('nome'=>'pantera legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
);

$sql = '';
foreach ($produtos as $i => $value) {
    $nome = $value["nome"];
    $preco = $value["preco"];
    $descricao = $value["descricao"];
    $imagem = $value["imagem"];

    $sql = "$sql <br> INSERT INTO produtos(nome, preco, descricao, imagem, categoria id, ativo) VALUES('$nome','$preco','$descricao','$imagem');";

}
echo $sql;

?>