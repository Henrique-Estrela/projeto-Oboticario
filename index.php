<?php
require_once '_scripts/verification.php';
$user = new usuarios();
define('host_name', 'localhost');
define('host_user', 'root');
define('host_pwd', "").
define('db_name', 'dados_user');
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> Login </title>
	<link rel="stylesheet" href="_CSS/form.css" type="text/css">
    <link rel="stylesheet" href="_CSS/style.css" type="text/css">

</head>
<body>
<div class="circle"></div>
  <form class="form left_hover" id="login1">
      <h2 class="form__title">Login</h2>
      <div class="form__container">
          <div class="form__group">
              <input type="text" id="user" name="user" class="form__input" placeholder=" " required>
              <label for="user" class="form__label">Usuario:</label>
              <span class="form__line"></span>
          </div>
          <!-- <div class="form__group">
              <input type="num" id="cpf" class="form__input" onblur="validarCPF(this);"  maxlength ="14" placeholder=" " required>
              <label for="user" class="form__label">CPF:</label>
              <span class="form__line"></span>
          </div> -->
         
          <div class="form__group">
              <input type="text" id="password" name="senha" class="form__input" placeholder=" " required>
              <label for="senha" class="form__label">Senha:</label>
              <span class="form__line"></span>
          </div>
          <button type="submit" class="form__submit" >Logar</button>
      </div>
      
  </form>

    <?php
    if(isset($_POST['user']))
    {
    $nome = addslashes($_POST['user']);
    $senha = addslashes($_POST['senha']);

    if (!empty($nome) && !empty($senha)) {
        $user -> conectar('db_name', 'host_name', 'host_user', 'host_pwd');
        if ($user -> msgErro == ""){
            if($user -> logar($email, $senha)){
                header("location: home.php");
            } else {
                ?>
                <div class="msg-erro"> Email ou Senha não conferem </div>
            <?php
            }
        } else {
            ?>
            <div class="msg-erro">
                <?php
                echo "ERRO: " . $user -> msgErro;
                ?>
            </div>
        <?php
        }

    }else {
        ?>
        <div class="msg-erro"> Por gentileza. Preencha os dois campos </div>
    <?php
        }
    }
    ?>
</body>
</html>
