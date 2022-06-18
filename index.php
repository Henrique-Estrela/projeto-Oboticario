<?php include 'head.php' ?>
<div class="circle"></div>
<div class="cube"></div>
  <form class="form left_hover" id="login1" action="">
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
          <button type="submit" class="form__submit" >Enviar</button>
      </div>
      
  </form>
  <?php
  include "_scripts/functions.php";

  if(!empty($_POST['user'])){

if(user($_POST)){
    echo'deu bom';
}else{
    echo 'deu ruim';
}}
  ?>




<?php include 'js.php' ?>
