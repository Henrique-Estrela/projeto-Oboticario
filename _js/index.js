function att() {
    var p1 = document.getElementById('cadastro1');

  // Esconde a DIV
  p1.style.display = 'none';
 

  var clique = document.getElementById('login');

  // Captura o evento de clique no link
  clique.onclick=function(){
    // Verifica se getComputedStyle é suportado
    if( 'getComputedStyle' in window ){
      var display = window.getComputedStyle(p1).display;
    } else {
      // Obtém a largura para navegadores antigos
      var display = p1.currentStyle.display;
    }
    
    // Verifica se display é none
    if( display == 'none' ){
      // Muda para display block
      p1.style.display = 'block';
    } else {
      // Muda para display none
      p1.style.display = 'none';
    }
    
    // Retorna falso para não atualizar a página
    return false;
  }
}

  
  



  
  
