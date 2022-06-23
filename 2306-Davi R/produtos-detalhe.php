<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';





$id = $_GET['id'];
$tipo = $_GET['tipo'];


?>
<div class="container">
    <div class="row m-5">
        <div class="col">
        <h1><?php echo $produtos[$id]['nome'];?></h1>
        <h4 id=desc><?php echo $produtos[$id]['descricao'];?></h4>
<section>
<img id=NFT src="./content/<?php echo $produtos[$id]['imagem'];?>"height=300>
 <h3><?php echo $produtos[$id]['preco'];?></h3>
</section>
        </div>
    </div>
<div class="row">
<div class="col">Comprar</div>
<div class="col">Voltar</div>
</div>
</div>



<?php
// include do footer
include_once './includes/_footer.php';
?>