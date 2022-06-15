<?php include 'head.php' ?>
<?php include 'menu.php' ?>

<div class="circle"></div>

  <form class="form left_hover" id="login1">
      <h2 class="form__title">Login</h2>
      <p class="form__paragraph">Não tem uma conta? <a href="#cadastro" onclick=" mostrar()" class="form__link1" id="login">Entre aqui</a></p>
      <div class="form__container">
          <div class="form__group">
              <input type="num" id="cpf" class="form__input" onblur="validarCPF(this);"  maxlength ="14" placeholder=" " required>
              <label for="user" class="form__label">CPF:</label>
              <span class="form__line"></span>
          </div>
          <div class="form__group">
              <input type="text" id="password" class="form__input" placeholder=" " required>
              <label for="password" class="form__label">Senha:</label>
              <span class="form__line"></span>
          </div>
          <input type="submit" class="form__submit" value="Entrar">
      </div>
  </form>


<?php include 'js.php' ?>
<?php include 'footer.php' ?>