<?php
include "protect.php";
?>

<?php
 include "head.php";
?>
<body>
    <?php
    
    include "menu.php";
    
    switch($_GET['r']){

        case 'cadProduto':
            include "views/cadProduto.php";
            break;

        case 'cadFuncionario':
            include "views/cadFuncionario.php";
            break;

        case 'ConsultarE':
            include "views/ConsultarE.php";
            break;

        case 'ControleV':
            include "views/ControleV.php";
            break;
            
        default:
            include "views/home.php";
        break;
        

    }
    
    
    ?>
    <?php include "js.php"; ?>
    <?php include "footer.php"; ?>
</body>
</html>