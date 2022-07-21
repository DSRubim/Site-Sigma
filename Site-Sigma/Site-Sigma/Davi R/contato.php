<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
if (isset($_POST['txtNome'])) {
    $name = strtoupper ($_POST['txtNome']);
echo $name;

}

?>


<h1>Contato</h1>

<form action="./contato.php" method="post">
    <label for="txtNome"><h6>Nome Completo</h6 height=300></label>
    <input type="text" name="txtNome" id="txtNome"required>
    <label for="txtNome"><h6>Email</h6></label>
    <input type="text" name="txtEmail" id="txtEmail"required>
    <label for="txtNome"><h6>Telefone</h6></label>
    <input type="text" name="txtCell" id="txtCell"required>
    <label for="txtNome"><h6>Deixe sua Mensagem aqui!</h6></label>
    <input type="textarea" name="txtMsg" id="txtMsg" rows="10" cols="40" maxlength="500"required>
    <input type="submit" value="Cadastrar">


</form>

<?php
// include do footer
include_once './includes/_footer.php';
?> 