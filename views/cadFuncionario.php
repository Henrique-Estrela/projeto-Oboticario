<?php
include "protect.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Document</title>
</head>
<body>
  

<div class="container-fluid form-aluno">

  <h1>Cadastro de Funcionarios</h1>
<form class="row g-3" method="post" action="">
  <div class="col-md-6">
    <label  class="form-label">Nome do Funcionario</label>
    <input type="text" class="form-control" name="user" required>
  </div>
  <div class="col-md-6">
      <label for="tipo" class="form-label">Cargo:</label>
      <select class="form-control caixa" name="tipo">
        <option value="FUNCIONARIO">Funcionario</option>
        <option value="ADM">Administrador</option>
      </select>
  </div>
  <div class="col-md-12">
    <label class="form-label">Senha</label>
    <input type="text" class="form-control" name="senha" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
  
</form>
<?php
include "_scripts/functions.php";

if(!empty($_POST['user'])){

  if(user($_POST)){
    ?>
    <script language='javascript'>
    Swal.fire({
    title: 'Salvo com sucesso meu patrão.',
    width: 600,
    padding: '3em',
    color: '#716add',
    background: '#fff url(/images/trees.png)',
    backdrop: `
      rgba(0,0,123,0.4)
      url("https://i.gifer.com/origin/51/518532f622d962be53e2e1f8989263a8_w200.gif")
      left top
      no-repeat
    `
    })
  </script>
    <?php }else{
     ?>
     <script>
       Swal.fire({
       icon: 'error',
       title: 'Oops...',
       text: 'Something went wrong!',
       footer: '<a href="">Why do I have this issue?</a>'
     })
     </script>
     <?php 
  };
}

?>
</body>
</html>