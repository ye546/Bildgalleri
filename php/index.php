<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap-4.3.1-dist/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="jumbotron">
    <a href="../../php/categories.php">☇ Tillbaka</a>
            <?php
                //katalognamn som titel                
                $dirname = basename(__DIR__);
                echo "<title>$dirname</title>";
                echo "<h1>Här visas bilder från <span style='font-weight: bold;'>$dirname</span></h1>";
            ?>

            <div class="row">
            <?php
                //skanna katalogen till en fält
                $dir = scandir(".");
                    
                //tar bort dem två första indexeringarna ur fältet för dem två är bara '.' & '..'
                unset($dir[0]);
                unset($dir[1]);

                foreach($dir as $d)
                {
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
