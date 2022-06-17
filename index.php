<?php include 'head.php' ?>
<link rel="stylesheet" href="_css/cubo.css">
<div class="circle"></div>
<div class="cube"></div>
  <form class="form left_hover" id="login1" action="">
      <h2 class="form__title">Login</h2>
      <div class="form__container">
          <div class="form__group">
              <input type="text" id="user" class="form__input" placeholder=" " required>
              <label for="user" class="form__label">Usuario:</label>
              <span class="form__line"></span>
          </div>
          <!-- <div class="form__group">
              <input type="num" id="cpf" class="form__input" onblur="validarCPF(this);"  maxlength ="14" placeholder=" " required>
              <label for="user" class="form__label">CPF:</label>
              <span class="form__line"></span>
          </div> -->
         
          <div class="form__group">
              <input type="text" id="password" class="form__input" placeholder=" " required>
              <label for="senha" class="form__label">Senha:</label>
              <span class="form__line"></span>
          </div>
          <div class="col-md-12">
              <label for="situacao" class="form-label">vc é:</label>
              <select class="form-control caixa" name="situacao">
                <option value="FUNCIONARIO">Funcionario</option>
                <option value="ADM">Administrador</option>
              </select>
          </div>
          <button type="submit" class="form__submit">Enviar</button>
      </div>
      
  </form>

<?php include 'js.php' ?>
<?php include 'footer.php' ?>