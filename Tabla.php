<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body style="background-image: url(https://images.hdqwalls.com/wallpapers/minecraft-night-in-the-woods-4k-jq.jpg);">
    <div class="container">
        <div class="row align-items-start">
          
            <div class="col">
                <br><br>

                <table class="table table-dark">

                    <tbody>

                        <?php
                        $num = 1;
                        $Casillas = 1;
                        $Cantidades = 1;
                        $link = "img/$num" . ".jpg";
                        while ($Casillas <= 3) {

                        ?>
                            <tr>


                                <?php
                                while ($Cantidades <= 3) {

                                    echo "<td>";
                                    echo "<a  href=Tabla.php?numero=$num><img src=$link width=120px></button>";
                                    $num++;
                                    $link = "img/$num" . ".jpg";
                                    $Cantidades++;
                                }
                                $Cantidades = 1;
                                $Casillas++;
                                ?>


                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="col">
                <br><br>

                <table class="table table-dark border-primary">

                    <tbody>
                        
                        <?php
                        if (isset($_GET["numero"])) {
                            
                        $num2 = 1;
                        $Casillas2 = 1;
                        $Cantidades2 = 1;
                        $Numero=$_GET["numero"];
                        while ($Casillas2 <= 5) {

                        ?>
                            <tr>


                                <?php
                                while ($Cantidades2 <= 2) {

                                    echo "<td>";
                                    echo "$Numero"."X"."$num2"."=".$Numero*$num2;
                                    $num2++;
                                    $Cantidades2++;
                                }
                                $Cantidades2 = 1;
                                $Casillas2++;
                                ?>


                            </tr>
                        <?php
                        }
                    }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>