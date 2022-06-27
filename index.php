<?php
include('conexao.php');

if(isset($_POST['user']) || isset($_POST['senha'])) {

    if(strlen($_POST['user']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['user']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM dados_user WHERE nome = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php?r=home");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
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
  <form class="form left_hover" method="POST" id="login1">
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

</body>
</html>
