<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap-4.3.1-dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
    <a href="../../index.html">☇ Hem</a>
    <?php
        echo "<h1>$d Katalogen</h1>";
    ?>
            <div class="row">
                <?php
                    //skanna katalogen till en fält
                    $dir = scandir(".");
                    foreach($dir as $d)
                    {
                        //$file_path = $dir."/".$d;
                        $file_extension = pathinfo($d);
                        //än så länge hanterar vi bara png och jpg filer, skippa att visa allting annat.
                        if($file_extension['extension'] == "png" || $file_extension['extension'] == "jpg")
                        {
                            echo "<a href='$d'><img class='rounded' height='100px' width='100px'src='$d' alt='bild'></a>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
