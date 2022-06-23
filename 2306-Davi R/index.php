<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

?>

<h1>Home</h1>

<div class="container">
<h2>Promoção</h2>
    <div class="row m-5">
        

    <?php
    //laco de repetição//
    for ($i=0; $i < 4 ; $i++) {
    ?>
    <div class="card m-3" style="width: 18rem;">
  <img src="./content/<?php echo $produtos[$i]['imagem'];?>" class="card-img-top" alt="..." height=300>
  <div class="card-body">
    <h5 class="card-title"><?php echo $produtos[$i]['nome'];?></h5>
    <p class="card-text"><?php echo $produtos[$i]['descricao'];?></p>
    <a href="produtos-detalhe.php?id=<?php echo $i;?>&tipo=promocao" class="btn btn-primary">Da um vizu</a>
  </div>
</div>
<?php
    }
?>
    </div>
</div>






<?php
// include do footer
include_once './includes/_footer.php';
?>