<html>

<head>
    <meta charset="UTF-8">
    <title>Fruteria</title>
    <h1>La Fruteria del siglo XXI</h1>
</head>

<body>
    <?php
    session_start();
    include_once 'funciones.php';

    if (isset($_GET['nombre'])) {
        $_SESSION['nombre'] = $_GET['nombre'];
        $_SESSION['pedidos'] = [];
    }

    if (!isset($_SESSION['nombre'])) {
        include_once 'entrada.php';
        exit();

    } else {

        if (isset($_REQUEST['nombre'])) {
            echo " Bienvenido <b>" . $_SESSION['nombre'] . "</b><br>";
            include_once  'Pedido.php';
        }

        if (isset($_POST["orden"])){
            //echo($_POST["orden"]);

        if ( $_POST["orden"] == "Anotar" ){
            /*if ( isset ($_SESSION['pedidos'][$_POST['fruta']])){
            $_SESSION['pedidos'][$_POST['fruta']] += $_POST['cantidad'];
            }
            else {
            $_SESSION['pedidos'][$_POST['fruta']] = $_POST['cantidad'];
            } NO FUNCIONA EL PRIMER ISSET*/
            echo $_POST['fruta'];
            $_SESSION['pedidos'][$_POST['fruta']] = $_SESSION['pedidos'][$_POST['fruta']]+$_POST['cantidad'];
        }
       
        echo "Este es su pedido :";
        echo "<table style='border: 1px solid black;'>";
        foreach ( $_SESSION['pedidos'] as $key => $value) {
        echo "<tr><td><b>".$key."</b><td></td><td>".$value."</td></tr>";
        }
        echo "</table>";
            
         if ( $_POST["orden"] == "Terminar" ){    
            ?>
            <br> Muchas gracias, por su pedido. <br><br>
            <input type="button" value=" NUEVO CLIENTE " onclick="location.href='<?=$_SERVER['PHP_SELF'];?>'">
            <?php 
            session_destroy();
            exit;
        }
        
    }
           
        /*switch ($selec) {

            case "Anotar":
                if (isset($_SESSION['pedidos'][$_POST['fruta']])) {
                    echo $_POST['orden'];
                    anotar();
                    break;
                }

            case "Terminar":
                include_once 'pedidoterminado.php';
                session_destroy();
                break;
        }*/
    }




    /*Errores y dudas: Como hacer que pase por el swicth case sin necesidad de un input entrar
    No funciona el else del primer if y preguntar por que hace un isset en entrada.php cuando ya lo tienes
    en el IF

    Como hacerlo con el sesion que no me sale
    $_SESSION['nombre']=$_GET['nombre'];
    if (isset($_SESSION['nombre'])) {
               echo " Bienvenido <b>".$_SESSION['nombre']."</b><br>";
               include_once  'comentario.html';
            }
    */
    ?>
    </div>
    </div>
</body>

</html>