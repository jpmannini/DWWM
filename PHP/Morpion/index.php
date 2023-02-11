
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tic Tac Toe</title>
</head>
<body> 
    <table>
        <?php
        $x=$_GET["x"];
        $y=$_GET["y"];

            for ($i=0;$i<3;$i++){
                echo '<tr>';
                for($j=0;$j<3;$j++){
                    echo "<td><a href=?x=$i&y=$j>x</a></td>" ;                 
                }
                echo '</tr>';
            }
            print_r($_GET);
        ?>
    </table>

</body>
</html>