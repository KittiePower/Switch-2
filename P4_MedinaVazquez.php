<!DOCTYPE html>
<html lang="es">
    <head>
        <META charset="UTF-8">
        <title> Condicional Switch </title>
    </head>
    <body>
        <font color=7044D7 size=5> Condicional Switch 2</font>
        <br><br>
        <font color=8693C6>
            <?php

               $controlador="Blog";

            switch($controlador){
                case "Control":
                    echo "<p>Se redirecciono a Control</p>";   
                    break;
                case "Inicio":
                    echo "<p>Se redirecciono a Inicio</p>";    
                    break;
                case "Blog":
                    echo "<p>Se redirecciono a Blog</p>";    
                    break;
                case "Empleados":
                    echo "<p>Se redirecciono a Empleados</p>";   
                    break;
                case "Quienes-Somos":
                    echo "<p>Se redirecciono a Quienes-Somos</p>";    
                    break;
                case "SiteMap":
                    echo "<p>Se redirecciono a SiteMap</p>";    
                    break;
                default:
                    echo "<p>No se redirecciono a ninguna pagina</p>";

                    }
            ?>

        </font>
    </body>
</html>