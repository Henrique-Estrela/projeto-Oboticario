<?php include 'head.php' ?>

<div class="circle"></div>

  <form class="form left_hover" id="login1" action="">
      <h2 class="form__title">Login</h2>
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
          <button type="submit" class="form__submit">Enviar</button>
      </div>
  </form>

<?php include 'js.php' ?>
<?php include 'footer.php' ?>