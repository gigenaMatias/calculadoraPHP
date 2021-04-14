<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web II Calculadora</title>
    </head>
    <body>
        <h1>Trabajo practico web 2 TUDAI UNICEN</h1>
        <nav>
            <ul>
                <li><a href="index.html">calculadora</a></li>
                <li><a href="pi.php">numero pi</a></li>
                <li><a href="about.php">about</a></li>
            </ul>
        </nav>

    <?php
        function showPiDetails(){
            echo "<h1>El número Pi</h1>";
            echo "<p>es la relación entre la longitud de una circunferencia y su diámetro en geometría euclidiana. Es irracional y una de las constantes matemáticas más importante</p>";
            echo "<p>El valor es: <strong>" . pi() . "<strong></p>";
        }
        showPiDetails();
    ?>

    </body>
</html>