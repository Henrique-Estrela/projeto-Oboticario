<?php
include "protect.php";
?>

<?php
 include "head.php";
?>
<body>
    <?php
    
    include "menu_fun.php";
    
    switch($_GET['r']){

        case 'cadProduto':
            include "views_fun/cadProduto.php";
            break;

        case 'cadFuncionario':
            include "views_fun/cadFuncionario.php";
            break;

        case 'ConsultarE':
            include "views_fun/ConsultarE.php";
            break;

        case 'ControleV':
            include "views_fun/ControleV.php";
            break;
            
        default:
            include "views_fun/home.php";
        break;
        
        

    }
    
    
    ?>
    <?php include "js.php"; ?>
    <?php include "footer.php"; ?>
</body>
</html>