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
        
        default:
            include "views/home.php";
        break;
        

    }
    
    
    ?>
    <?php include "js.php"; ?>
    <?php include "footer.php"; ?>
</body>
</html>