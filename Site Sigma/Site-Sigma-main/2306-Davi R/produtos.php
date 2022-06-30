<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>


<div class="container">
<h1>Produtos</h1>
    <div class="row m-5">
<?php
    //laco de repetição//
    foreach ($produtos as $key => $value) {
    ?>
    <div class="card m-3" style="width: 18rem;">
  <img src="./content/<?php echo $value['imagem'];?>" class="card-img-top" alt="..." height=200>
  <div class="card-body">
    <h5 class="card-title"><?php echo $value['nome'];?></h5>
    <p class="card-text"><?php echo $value['descricao'];?></p>
    <a href="produtos-detalhe.php?id=<?php echo $key;?>&tipo=promocao" class="btn btn-primary">Da um vizu</a>
  </div>
</div>
<?php
    }
?>
<?php
// include do footer
include_once './includes/_footer.php';
?>



